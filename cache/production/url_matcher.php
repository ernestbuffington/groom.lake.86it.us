<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class an602_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // an602_cron_run
        if (0 === strpos($pathinfo, '/cron') && preg_match('#^/cron/(?P<cron_type>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'an602_cron_run']), array (  '_controller' => 'cron.controller:handle',));
        }

        if (0 === strpos($pathinfo, '/feed')) {
            if (0 === strpos($pathinfo, '/feed/forum')) {
                // an602_feed_forums
                if ('/feed/forums' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:forums',  '_route' => 'an602_feed_forums',);
                }

                // an602_feed_forum
                if (preg_match('#^/feed/forum/(?P<forum_id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'an602_feed_forum']), array (  '_controller' => 'phpbb.feed.controller:forum',));
                }

            }

            // an602_feed_news
            if ('/feed/news' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:news',  '_route' => 'an602_feed_news',);
            }

            if (0 === strpos($pathinfo, '/feed/topics')) {
                // an602_feed_topics
                if ('/feed/topics' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics',  '_route' => 'an602_feed_topics',);
                }

                // an602_feed_topics_active
                if ('/feed/topics_active' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics_active',  '_route' => 'an602_feed_topics_active',);
                }

                // an602_feed_topics_new
                if ('/feed/topics_new' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics_new',  '_route' => 'an602_feed_topics_new',);
                }

            }

            // an602_feed_topic
            if (0 === strpos($pathinfo, '/feed/topic') && preg_match('#^/feed/topic/(?P<topic_id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'an602_feed_topic']), array (  '_controller' => 'phpbb.feed.controller:topic',));
            }

            // an602_feed_overall
            if (preg_match('#^/feed/(?P<mode>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'an602_feed_overall']), array (  '_controller' => 'phpbb.feed.controller:overall',));
            }

            // an602_feed_index
            if ('/feed' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:overall',  '_route' => 'an602_feed_index',);
            }

        }

        // an602_help_bbcode_controller
        if ('/help/bbcode' === $pathinfo) {
            return array (  '_controller' => 'phpbb.help.controller.bbcode:handle',  '_route' => 'an602_help_bbcode_controller',);
        }

        // an602_help_faq_controller
        if ('/help/faq' === $pathinfo) {
            return array (  '_controller' => 'phpbb.help.controller.faq:handle',  '_route' => 'an602_help_faq_controller',);
        }

        // an602_report_pm_controller
        if (0 === strpos($pathinfo, '/pm') && preg_match('#^/pm/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'an602_report_pm_controller']), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'pm',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_an602_report_pm_controller;
            }

            return $ret;
        }
        not_an602_report_pm_controller:

        // an602_report_post_controller
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'an602_report_post_controller']), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'post',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_an602_report_post_controller;
            }

            return $ret;
        }
        not_an602_report_post_controller:

        // an602_ucp_reset_password_controller
        if ('/user/reset_password' === $pathinfo) {
            return array (  '_controller' => 'phpbb.ucp.controller.reset_password:reset',  '_route' => 'an602_ucp_reset_password_controller',);
        }

        // an602_ucp_forgot_password_controller
        if ('/user/forgot_password' === $pathinfo) {
            return array (  '_controller' => 'phpbb.ucp.controller.reset_password:request',  '_route' => 'an602_ucp_forgot_password_controller',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
