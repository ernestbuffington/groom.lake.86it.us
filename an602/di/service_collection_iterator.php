<?php
/**
*
* This file is part of the AN602 CMS Software package.
*
* @copyright (c) AN602 Limited <https://www.groom.lake.86it.us>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace an602\di;

/**
* Iterator which loads the services when they are requested
*/
class service_collection_iterator extends \ArrayIterator
{
	/**
	* @var \an602\di\service_collection
	*/
	protected $collection;

	/**
	* Construct an ArrayIterator for service_collection
	*
	* @param \an602\di\service_collection $collection The collection to iterate over
	* @param int $flags Flags to control the behaviour of the ArrayObject object.
	* @see ArrayObject::setFlags()
	*/
	public function __construct(service_collection $collection, $flags = 0)
	{
		parent::__construct($collection->getArrayCopy(), $flags);
		$this->collection = $collection;
	}

	/**
	* {@inheritdoc}
	*/
	public function current()
	{
		return $this->collection->offsetGet($this->key());
	}
}
