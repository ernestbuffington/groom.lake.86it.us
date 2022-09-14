<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class an602_cache_container extends \Symfony\Component\DependencyInjection\Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->syntheticIds = [
            'config.php' => true,
            'dbal.conn.driver' => true,
        ];
        $this->methodMap = [
            'acl.permissions' => 'getAcl_PermissionsService',
            'attachment.delete' => 'getAttachment_DeleteService',
            'attachment.manager' => 'getAttachment_ManagerService',
            'attachment.resync' => 'getAttachment_ResyncService',
            'attachment.upload' => 'getAttachment_UploadService',
            'auth' => 'getAuthService',
            'auth.provider.apache' => 'getAuth_Provider_ApacheService',
            'auth.provider.db' => 'getAuth_Provider_DbService',
            'auth.provider.ldap' => 'getAuth_Provider_LdapService',
            'auth.provider.oauth' => 'getAuth_Provider_OauthService',
            'auth.provider.oauth.service.bitly' => 'getAuth_Provider_Oauth_Service_BitlyService',
            'auth.provider.oauth.service.facebook' => 'getAuth_Provider_Oauth_Service_FacebookService',
            'auth.provider.oauth.service.google' => 'getAuth_Provider_Oauth_Service_GoogleService',
            'auth.provider.oauth.service.twitter' => 'getAuth_Provider_Oauth_Service_TwitterService',
            'auth.provider.oauth.service_collection' => 'getAuth_Provider_Oauth_ServiceCollectionService',
            'auth.provider_collection' => 'getAuth_ProviderCollectionService',
            'avatar.driver.gravatar' => 'getAvatar_Driver_GravatarService',
            'avatar.driver.local' => 'getAvatar_Driver_LocalService',
            'avatar.driver.remote' => 'getAvatar_Driver_RemoteService',
            'avatar.driver.upload' => 'getAvatar_Driver_UploadService',
            'avatar.driver_collection' => 'getAvatar_DriverCollectionService',
            'avatar.manager' => 'getAvatar_ManagerService',
            'cache' => 'getCacheService',
            'cache.driver' => 'getCache_DriverService',
            'captcha.factory' => 'getCaptcha_FactoryService',
            'captcha.plugins.service_collection' => 'getCaptcha_Plugins_ServiceCollectionService',
            'class_loader' => 'getClassLoaderService',
            'class_loader.ext' => 'getClassLoader_ExtService',
            'config' => 'getConfigService',
            'config_text' => 'getConfigTextService',
            'console.command.cache.purge' => 'getConsole_Command_Cache_PurgeService',
            'console.command.config.delete' => 'getConsole_Command_Config_DeleteService',
            'console.command.config.get' => 'getConsole_Command_Config_GetService',
            'console.command.config.increment' => 'getConsole_Command_Config_IncrementService',
            'console.command.config.set' => 'getConsole_Command_Config_SetService',
            'console.command.config.set_atomic' => 'getConsole_Command_Config_SetAtomicService',
            'console.command.cron.list' => 'getConsole_Command_Cron_ListService',
            'console.command.cron.run' => 'getConsole_Command_Cron_RunService',
            'console.command.db.list' => 'getConsole_Command_Db_ListService',
            'console.command.db.migrate' => 'getConsole_Command_Db_MigrateService',
            'console.command.db.revert' => 'getConsole_Command_Db_RevertService',
            'console.command.dev.migration_tips' => 'getConsole_Command_Dev_MigrationTipsService',
            'console.command.extension.disable' => 'getConsole_Command_Extension_DisableService',
            'console.command.extension.enable' => 'getConsole_Command_Extension_EnableService',
            'console.command.extension.purge' => 'getConsole_Command_Extension_PurgeService',
            'console.command.extension.show' => 'getConsole_Command_Extension_ShowService',
            'console.command.fixup.fix_left_right_ids' => 'getConsole_Command_Fixup_FixLeftRightIdsService',
            'console.command.fixup.update_hashes' => 'getConsole_Command_Fixup_UpdateHashesService',
            'console.command.reparser.list' => 'getConsole_Command_Reparser_ListService',
            'console.command.reparser.reparse' => 'getConsole_Command_Reparser_ReparseService',
            'console.command.thumbnail.delete' => 'getConsole_Command_Thumbnail_DeleteService',
            'console.command.thumbnail.generate' => 'getConsole_Command_Thumbnail_GenerateService',
            'console.command.thumbnail.recreate' => 'getConsole_Command_Thumbnail_RecreateService',
            'console.command.update.check' => 'getConsole_Command_Update_CheckService',
            'console.command.user.activate' => 'getConsole_Command_User_ActivateService',
            'console.command.user.add' => 'getConsole_Command_User_AddService',
            'console.command.user.delete' => 'getConsole_Command_User_DeleteService',
            'console.command.user.reclean' => 'getConsole_Command_User_RecleanService',
            'console.command_collection' => 'getConsole_CommandCollectionService',
            'console.exception_subscriber' => 'getConsole_ExceptionSubscriberService',
            'content.visibility' => 'getContent_VisibilityService',
            'controller.helper' => 'getController_HelperService',
            'controller.resolver' => 'getController_ResolverService',
            'core.captcha.plugins.gd' => 'getCore_Captcha_Plugins_GdService',
            'core.captcha.plugins.gd_wave' => 'getCore_Captcha_Plugins_GdWaveService',
            'core.captcha.plugins.nogd' => 'getCore_Captcha_Plugins_NogdService',
            'core.captcha.plugins.qa' => 'getCore_Captcha_Plugins_QaService',
            'core.captcha.plugins.recaptcha' => 'getCore_Captcha_Plugins_RecaptchaService',
            'core.captcha.plugins.recaptcha_v3' => 'getCore_Captcha_Plugins_RecaptchaV3Service',
            'cron.controller' => 'getCron_ControllerService',
            'cron.event_listener' => 'getCron_EventListenerService',
            'cron.lock_db' => 'getCron_LockDbService',
            'cron.manager' => 'getCron_ManagerService',
            'cron.task.core.prune_all_forums' => 'getCron_Task_Core_PruneAllForumsService',
            'cron.task.core.prune_forum' => 'getCron_Task_Core_PruneForumService',
            'cron.task.core.prune_notifications' => 'getCron_Task_Core_PruneNotificationsService',
            'cron.task.core.prune_shadow_topics' => 'getCron_Task_Core_PruneShadowTopicsService',
            'cron.task.core.queue' => 'getCron_Task_Core_QueueService',
            'cron.task.core.tidy_cache' => 'getCron_Task_Core_TidyCacheService',
            'cron.task.core.tidy_database' => 'getCron_Task_Core_TidyDatabaseService',
            'cron.task.core.tidy_plupload' => 'getCron_Task_Core_TidyPluploadService',
            'cron.task.core.tidy_search' => 'getCron_Task_Core_TidySearchService',
            'cron.task.core.tidy_sessions' => 'getCron_Task_Core_TidySessionsService',
            'cron.task.core.tidy_warnings' => 'getCron_Task_Core_TidyWarningsService',
            'cron.task.core.update_hashes' => 'getCron_Task_Core_UpdateHashesService',
            'cron.task.text_reparser.pm_text' => 'getCron_Task_TextReparser_PmTextService',
            'cron.task.text_reparser.poll_option' => 'getCron_Task_TextReparser_PollOptionService',
            'cron.task.text_reparser.poll_title' => 'getCron_Task_TextReparser_PollTitleService',
            'cron.task.text_reparser.post_text' => 'getCron_Task_TextReparser_PostTextService',
            'cron.task.text_reparser.user_signature' => 'getCron_Task_TextReparser_UserSignatureService',
            'cron.task_collection' => 'getCron_TaskCollectionService',
            'dbal.conn' => 'getDbal_ConnService',
            'dbal.extractor' => 'getDbal_ExtractorService',
            'dbal.extractor.extractors.mssql_extractor' => 'getDbal_Extractor_Extractors_MssqlExtractorService',
            'dbal.extractor.extractors.mysql_extractor' => 'getDbal_Extractor_Extractors_MysqlExtractorService',
            'dbal.extractor.extractors.oracle_extractor' => 'getDbal_Extractor_Extractors_OracleExtractorService',
            'dbal.extractor.extractors.postgres_extractor' => 'getDbal_Extractor_Extractors_PostgresExtractorService',
            'dbal.extractor.extractors.sqlite3_extractor' => 'getDbal_Extractor_Extractors_Sqlite3ExtractorService',
            'dbal.extractor.factory' => 'getDbal_Extractor_FactoryService',
            'dbal.tools' => 'getDbal_ToolsService',
            'dbal.tools.factory' => 'getDbal_Tools_FactoryService',
            'dispatcher' => 'getDispatcherService',
            'ext.manager' => 'getExt_ManagerService',
            'feed.forum' => 'getFeed_ForumService',
            'feed.forums' => 'getFeed_ForumsService',
            'feed.helper' => 'getFeed_HelperService',
            'feed.news' => 'getFeed_NewsService',
            'feed.overall' => 'getFeed_OverallService',
            'feed.quote_helper' => 'getFeed_QuoteHelperService',
            'feed.topic' => 'getFeed_TopicService',
            'feed.topics' => 'getFeed_TopicsService',
            'feed.topics_active' => 'getFeed_TopicsActiveService',
            'file_downloader' => 'getFileDownloaderService',
            'file_locator' => 'getFileLocatorService',
            'files.factory' => 'getFiles_FactoryService',
            'files.filespec' => 'getFiles_FilespecService',
            'files.types.form' => 'getFiles_Types_FormService',
            'files.types.local' => 'getFiles_Types_LocalService',
            'files.types.remote' => 'getFiles_Types_RemoteService',
            'files.upload' => 'getFiles_UploadService',
            'filesystem' => 'getFilesystemService',
            'group_helper' => 'getGroupHelperService',
            'groupposition.legend' => 'getGroupposition_LegendService',
            'groupposition.teampage' => 'getGroupposition_TeampageService',
            'hook_finder' => 'getHookFinderService',
            'http_kernel' => 'getHttpKernelService',
            'kernel_exception_subscriber' => 'getKernelExceptionSubscriberService',
            'kernel_terminate_subscriber' => 'getKernelTerminateSubscriberService',
            'language' => 'getLanguageService',
            'language.helper.language_file' => 'getLanguage_Helper_LanguageFileService',
            'language.loader' => 'getLanguage_LoaderService',
            'log' => 'getLogService',
            'message.form.admin' => 'getMessage_Form_AdminService',
            'message.form.topic' => 'getMessage_Form_TopicService',
            'message.form.user' => 'getMessage_Form_UserService',
            'migrator' => 'getMigratorService',
            'migrator.helper' => 'getMigrator_HelperService',
            'migrator.tool.config' => 'getMigrator_Tool_ConfigService',
            'migrator.tool.config_text' => 'getMigrator_Tool_ConfigTextService',
            'migrator.tool.module' => 'getMigrator_Tool_ModuleService',
            'migrator.tool.permission' => 'getMigrator_Tool_PermissionService',
            'migrator.tool_collection' => 'getMigrator_ToolCollectionService',
            'mimetype.content_guesser' => 'getMimetype_ContentGuesserService',
            'mimetype.extension_guesser' => 'getMimetype_ExtensionGuesserService',
            'mimetype.filebinary_mimetype_guesser' => 'getMimetype_FilebinaryMimetypeGuesserService',
            'mimetype.fileinfo_mimetype_guesser' => 'getMimetype_FileinfoMimetypeGuesserService',
            'mimetype.guesser' => 'getMimetype_GuesserService',
            'mimetype.guesser_collection' => 'getMimetype_GuesserCollectionService',
            'module.manager' => 'getModule_ManagerService',
            'notification.method.board' => 'getNotification_Method_BoardService',
            'notification.method.email' => 'getNotification_Method_EmailService',
            'notification.method.jabber' => 'getNotification_Method_JabberService',
            'notification.method_collection' => 'getNotification_MethodCollectionService',
            'notification.type.admin_activate_user' => 'getNotification_Type_AdminActivateUserService',
            'notification.type.approve_post' => 'getNotification_Type_ApprovePostService',
            'notification.type.approve_topic' => 'getNotification_Type_ApproveTopicService',
            'notification.type.bookmark' => 'getNotification_Type_BookmarkService',
            'notification.type.disapprove_post' => 'getNotification_Type_DisapprovePostService',
            'notification.type.disapprove_topic' => 'getNotification_Type_DisapproveTopicService',
            'notification.type.forum' => 'getNotification_Type_ForumService',
            'notification.type.group_request' => 'getNotification_Type_GroupRequestService',
            'notification.type.group_request_approved' => 'getNotification_Type_GroupRequestApprovedService',
            'notification.type.pm' => 'getNotification_Type_PmService',
            'notification.type.post' => 'getNotification_Type_PostService',
            'notification.type.post_in_queue' => 'getNotification_Type_PostInQueueService',
            'notification.type.quote' => 'getNotification_Type_QuoteService',
            'notification.type.report_pm' => 'getNotification_Type_ReportPmService',
            'notification.type.report_pm_closed' => 'getNotification_Type_ReportPmClosedService',
            'notification.type.report_post' => 'getNotification_Type_ReportPostService',
            'notification.type.report_post_closed' => 'getNotification_Type_ReportPostClosedService',
            'notification.type.topic' => 'getNotification_Type_TopicService',
            'notification.type.topic_in_queue' => 'getNotification_Type_TopicInQueueService',
            'notification.type_collection' => 'getNotification_TypeCollectionService',
            'notification_manager' => 'getNotificationManagerService',
            'pagination' => 'getPaginationService',
            'passwords.driver.argon2i' => 'getPasswords_Driver_Argon2iService',
            'passwords.driver.argon2id' => 'getPasswords_Driver_Argon2idService',
            'passwords.driver.bcrypt' => 'getPasswords_Driver_BcryptService',
            'passwords.driver.bcrypt_2y' => 'getPasswords_Driver_Bcrypt2yService',
            'passwords.driver.bcrypt_wcf2' => 'getPasswords_Driver_BcryptWcf2Service',
            'passwords.driver.convert_password' => 'getPasswords_Driver_ConvertPasswordService',
            'passwords.driver.md5_mybb' => 'getPasswords_Driver_Md5MybbService',
            'passwords.driver.md5_phpbb2' => 'getPasswords_Driver_Md5Phpbb2Service',
            'passwords.driver.md5_vb' => 'getPasswords_Driver_Md5VbService',
            'passwords.driver.phpass' => 'getPasswords_Driver_PhpassService',
            'passwords.driver.salted_md5' => 'getPasswords_Driver_SaltedMd5Service',
            'passwords.driver.sha1' => 'getPasswords_Driver_Sha1Service',
            'passwords.driver.sha1_smf' => 'getPasswords_Driver_Sha1SmfService',
            'passwords.driver.sha1_wcf1' => 'getPasswords_Driver_Sha1Wcf1Service',
            'passwords.driver_collection' => 'getPasswords_DriverCollectionService',
            'passwords.driver_helper' => 'getPasswords_DriverHelperService',
            'passwords.helper' => 'getPasswords_HelperService',
            'passwords.manager' => 'getPasswords_ManagerService',
            'passwords.update.lock' => 'getPasswords_Update_LockService',
            'path_helper' => 'getPathHelperService',
            'php_ini' => 'getPhpIniService',
            'an602.feed.controller' => 'getPhpbb_Feed_ControllerService',
            'an602.help.controller.bbcode' => 'getPhpbb_Help_Controller_BbcodeService',
            'an602.help.controller.faq' => 'getPhpbb_Help_Controller_FaqService',
            'an602.help.manager' => 'getPhpbb_Help_ManagerService',
            'an602.report.controller' => 'getPhpbb_Report_ControllerService',
            'an602.report.handler_factory' => 'getPhpbb_Report_HandlerFactoryService',
            'an602.report.handlers.report_handler_pm' => 'getPhpbb_Report_Handlers_ReportHandlerPmService',
            'an602.report.handlers.report_handler_post' => 'getPhpbb_Report_Handlers_ReportHandlerPostService',
            'an602.report.report_reason_list_provider' => 'getPhpbb_Report_ReportReasonListProviderService',
            'an602.ucp.controller.reset_password' => 'getPhpbb_Ucp_Controller_ResetPasswordService',
            'an602.viglink.acp_listener' => 'getPhpbb_Viglink_AcpListenerService',
            'an602.viglink.cron.task.viglink' => 'getPhpbb_Viglink_Cron_Task_ViglinkService',
            'an602.viglink.helper' => 'getPhpbb_Viglink_HelperService',
            'an602.viglink.listener' => 'getPhpbb_Viglink_ListenerService',
            'plupload' => 'getPluploadService',
            'profilefields.lang_helper' => 'getProfilefields_LangHelperService',
            'profilefields.manager' => 'getProfilefields_ManagerService',
            'profilefields.type.bool' => 'getProfilefields_Type_BoolService',
            'profilefields.type.date' => 'getProfilefields_Type_DateService',
            'profilefields.type.dropdown' => 'getProfilefields_Type_DropdownService',
            'profilefields.type.int' => 'getProfilefields_Type_IntService',
            'profilefields.type.string' => 'getProfilefields_Type_StringService',
            'profilefields.type.text' => 'getProfilefields_Type_TextService',
            'profilefields.type.url' => 'getProfilefields_Type_UrlService',
            'profilefields.type_collection' => 'getProfilefields_TypeCollectionService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'router.listener' => 'getRouter_ListenerService',
            'routing.chained_resources_locator' => 'getRouting_ChainedResourcesLocatorService',
            'routing.delegated_loader' => 'getRouting_DelegatedLoaderService',
            'routing.helper' => 'getRouting_HelperService',
            'routing.loader.collection' => 'getRouting_Loader_CollectionService',
            'routing.loader.yaml' => 'getRouting_Loader_YamlService',
            'routing.resolver' => 'getRouting_ResolverService',
            'routing.resources_locator.collection' => 'getRouting_ResourcesLocator_CollectionService',
            'routing.resources_locator.default' => 'getRouting_ResourcesLocator_DefaultService',
            'symfony_request' => 'getSymfonyRequestService',
            'symfony_response_listener' => 'getSymfonyResponseListenerService',
            'template' => 'getTemplateService',
            'template.twig.environment' => 'getTemplate_Twig_EnvironmentService',
            'template.twig.extensions.avatar' => 'getTemplate_Twig_Extensions_AvatarService',
            'template.twig.extensions.collection' => 'getTemplate_Twig_Extensions_CollectionService',
            'template.twig.extensions.config' => 'getTemplate_Twig_Extensions_ConfigService',
            'template.twig.extensions.debug' => 'getTemplate_Twig_Extensions_DebugService',
            'template.twig.extensions.phpbb' => 'getTemplate_Twig_Extensions_PhpbbService',
            'template.twig.extensions.routing' => 'getTemplate_Twig_Extensions_RoutingService',
            'template.twig.extensions.username' => 'getTemplate_Twig_Extensions_UsernameService',
            'template.twig.lexer' => 'getTemplate_Twig_LexerService',
            'template.twig.loader' => 'getTemplate_Twig_LoaderService',
            'template_context' => 'getTemplateContextService',
            'text_formatter.acp_utils' => 'getTextFormatter_AcpUtilsService',
            'text_formatter.data_access' => 'getTextFormatter_DataAccessService',
            'text_formatter.s9e.bbcode_merger' => 'getTextFormatter_S9e_BbcodeMergerService',
            'text_formatter.s9e.factory' => 'getTextFormatter_S9e_FactoryService',
            'text_formatter.s9e.link_helper' => 'getTextFormatter_S9e_LinkHelperService',
            'text_formatter.s9e.parser' => 'getTextFormatter_S9e_ParserService',
            'text_formatter.s9e.quote_helper' => 'getTextFormatter_S9e_QuoteHelperService',
            'text_formatter.s9e.renderer' => 'getTextFormatter_S9e_RendererService',
            'text_formatter.s9e.utils' => 'getTextFormatter_S9e_UtilsService',
            'text_reparser.contact_admin_info' => 'getTextReparser_ContactAdminInfoService',
            'text_reparser.forum_description' => 'getTextReparser_ForumDescriptionService',
            'text_reparser.forum_rules' => 'getTextReparser_ForumRulesService',
            'text_reparser.group_description' => 'getTextReparser_GroupDescriptionService',
            'text_reparser.lock' => 'getTextReparser_LockService',
            'text_reparser.manager' => 'getTextReparser_ManagerService',
            'text_reparser.pm_text' => 'getTextReparser_PmTextService',
            'text_reparser.poll_option' => 'getTextReparser_PollOptionService',
            'text_reparser.poll_title' => 'getTextReparser_PollTitleService',
            'text_reparser.post_text' => 'getTextReparser_PostTextService',
            'text_reparser.user_signature' => 'getTextReparser_UserSignatureService',
            'text_reparser_collection' => 'getTextReparserCollectionService',
            'upload_imagesize' => 'getUploadImagesizeService',
            'user' => 'getUserService',
            'user_loader' => 'getUserLoaderService',
            'version_helper' => 'getVersionHelperService',
            'viewonline_helper' => 'getViewonlineHelperService',
        ];
        $this->privates = [
            'text_formatter.cache' => true,
            'text_formatter.parser' => true,
            'text_formatter.renderer' => true,
            'text_formatter.utils' => true,
            'acl.permissions' => true,
            'attachment.delete' => true,
            'attachment.manager' => true,
            'attachment.resync' => true,
            'attachment.upload' => true,
            'auth' => true,
            'auth.provider.apache' => true,
            'auth.provider.db' => true,
            'auth.provider.ldap' => true,
            'auth.provider.oauth' => true,
            'auth.provider.oauth.service.bitly' => true,
            'auth.provider.oauth.service.facebook' => true,
            'auth.provider.oauth.service.google' => true,
            'auth.provider.oauth.service.twitter' => true,
            'auth.provider.oauth.service_collection' => true,
            'auth.provider_collection' => true,
            'avatar.driver.gravatar' => true,
            'avatar.driver.local' => true,
            'avatar.driver.remote' => true,
            'avatar.driver.upload' => true,
            'avatar.driver_collection' => true,
            'avatar.manager' => true,
            'cache' => true,
            'cache.driver' => true,
            'captcha.factory' => true,
            'captcha.plugins.service_collection' => true,
            'class_loader' => true,
            'class_loader.ext' => true,
            'config' => true,
            'config.php' => true,
            'config_text' => true,
            'console.command.cache.purge' => true,
            'console.command.config.delete' => true,
            'console.command.config.get' => true,
            'console.command.config.increment' => true,
            'console.command.config.set' => true,
            'console.command.config.set_atomic' => true,
            'console.command.cron.list' => true,
            'console.command.cron.run' => true,
            'console.command.db.list' => true,
            'console.command.db.migrate' => true,
            'console.command.db.revert' => true,
            'console.command.dev.migration_tips' => true,
            'console.command.extension.disable' => true,
            'console.command.extension.enable' => true,
            'console.command.extension.purge' => true,
            'console.command.extension.show' => true,
            'console.command.fixup.fix_left_right_ids' => true,
            'console.command.fixup.update_hashes' => true,
            'console.command.reparser.list' => true,
            'console.command.reparser.reparse' => true,
            'console.command.thumbnail.delete' => true,
            'console.command.thumbnail.generate' => true,
            'console.command.thumbnail.recreate' => true,
            'console.command.update.check' => true,
            'console.command.user.activate' => true,
            'console.command.user.add' => true,
            'console.command.user.delete' => true,
            'console.command.user.reclean' => true,
            'console.command_collection' => true,
            'console.exception_subscriber' => true,
            'content.visibility' => true,
            'controller.helper' => true,
            'controller.resolver' => true,
            'core.captcha.plugins.gd' => true,
            'core.captcha.plugins.gd_wave' => true,
            'core.captcha.plugins.nogd' => true,
            'core.captcha.plugins.qa' => true,
            'core.captcha.plugins.recaptcha' => true,
            'core.captcha.plugins.recaptcha_v3' => true,
            'cron.controller' => true,
            'cron.event_listener' => true,
            'cron.lock_db' => true,
            'cron.manager' => true,
            'cron.task.core.prune_all_forums' => true,
            'cron.task.core.prune_forum' => true,
            'cron.task.core.prune_notifications' => true,
            'cron.task.core.prune_shadow_topics' => true,
            'cron.task.core.queue' => true,
            'cron.task.core.tidy_cache' => true,
            'cron.task.core.tidy_database' => true,
            'cron.task.core.tidy_plupload' => true,
            'cron.task.core.tidy_search' => true,
            'cron.task.core.tidy_sessions' => true,
            'cron.task.core.tidy_warnings' => true,
            'cron.task.core.update_hashes' => true,
            'cron.task.text_reparser.pm_text' => true,
            'cron.task.text_reparser.poll_option' => true,
            'cron.task.text_reparser.poll_title' => true,
            'cron.task.text_reparser.post_text' => true,
            'cron.task.text_reparser.user_signature' => true,
            'cron.task_collection' => true,
            'dbal.conn' => true,
            'dbal.conn.driver' => true,
            'dbal.extractor' => true,
            'dbal.extractor.extractors.mssql_extractor' => true,
            'dbal.extractor.extractors.mysql_extractor' => true,
            'dbal.extractor.extractors.oracle_extractor' => true,
            'dbal.extractor.extractors.postgres_extractor' => true,
            'dbal.extractor.extractors.sqlite3_extractor' => true,
            'dbal.extractor.factory' => true,
            'dbal.tools' => true,
            'dbal.tools.factory' => true,
            'dispatcher' => true,
            'ext.manager' => true,
            'feed.forum' => true,
            'feed.forums' => true,
            'feed.helper' => true,
            'feed.news' => true,
            'feed.overall' => true,
            'feed.quote_helper' => true,
            'feed.topic' => true,
            'feed.topics' => true,
            'feed.topics_active' => true,
            'file_downloader' => true,
            'file_locator' => true,
            'files.factory' => true,
            'files.filespec' => true,
            'files.types.form' => true,
            'files.types.local' => true,
            'files.types.remote' => true,
            'files.upload' => true,
            'filesystem' => true,
            'group_helper' => true,
            'groupposition.legend' => true,
            'groupposition.teampage' => true,
            'hook_finder' => true,
            'http_kernel' => true,
            'kernel_exception_subscriber' => true,
            'kernel_terminate_subscriber' => true,
            'language' => true,
            'language.helper.language_file' => true,
            'language.loader' => true,
            'log' => true,
            'message.form.admin' => true,
            'message.form.topic' => true,
            'message.form.user' => true,
            'migrator' => true,
            'migrator.helper' => true,
            'migrator.tool.config' => true,
            'migrator.tool.config_text' => true,
            'migrator.tool.module' => true,
            'migrator.tool.permission' => true,
            'migrator.tool_collection' => true,
            'mimetype.content_guesser' => true,
            'mimetype.extension_guesser' => true,
            'mimetype.filebinary_mimetype_guesser' => true,
            'mimetype.fileinfo_mimetype_guesser' => true,
            'mimetype.guesser' => true,
            'mimetype.guesser_collection' => true,
            'module.manager' => true,
            'notification.method.board' => true,
            'notification.method.email' => true,
            'notification.method.jabber' => true,
            'notification.method_collection' => true,
            'notification.type.admin_activate_user' => true,
            'notification.type.approve_post' => true,
            'notification.type.approve_topic' => true,
            'notification.type.bookmark' => true,
            'notification.type.disapprove_post' => true,
            'notification.type.disapprove_topic' => true,
            'notification.type.forum' => true,
            'notification.type.group_request' => true,
            'notification.type.group_request_approved' => true,
            'notification.type.pm' => true,
            'notification.type.post' => true,
            'notification.type.post_in_queue' => true,
            'notification.type.quote' => true,
            'notification.type.report_pm' => true,
            'notification.type.report_pm_closed' => true,
            'notification.type.report_post' => true,
            'notification.type.report_post_closed' => true,
            'notification.type.topic' => true,
            'notification.type.topic_in_queue' => true,
            'notification.type_collection' => true,
            'notification_manager' => true,
            'pagination' => true,
            'passwords.driver.argon2i' => true,
            'passwords.driver.argon2id' => true,
            'passwords.driver.bcrypt' => true,
            'passwords.driver.bcrypt_2y' => true,
            'passwords.driver.bcrypt_wcf2' => true,
            'passwords.driver.convert_password' => true,
            'passwords.driver.md5_mybb' => true,
            'passwords.driver.md5_phpbb2' => true,
            'passwords.driver.md5_vb' => true,
            'passwords.driver.phpass' => true,
            'passwords.driver.salted_md5' => true,
            'passwords.driver.sha1' => true,
            'passwords.driver.sha1_smf' => true,
            'passwords.driver.sha1_wcf1' => true,
            'passwords.driver_collection' => true,
            'passwords.driver_helper' => true,
            'passwords.helper' => true,
            'passwords.manager' => true,
            'passwords.update.lock' => true,
            'path_helper' => true,
            'php_ini' => true,
            'an602.feed.controller' => true,
            'an602.help.controller.bbcode' => true,
            'an602.help.controller.faq' => true,
            'an602.help.manager' => true,
            'an602.report.controller' => true,
            'an602.report.handler_factory' => true,
            'an602.report.handlers.report_handler_pm' => true,
            'an602.report.handlers.report_handler_post' => true,
            'an602.report.report_reason_list_provider' => true,
            'an602.ucp.controller.reset_password' => true,
            'an602.viglink.acp_listener' => true,
            'an602.viglink.cron.task.viglink' => true,
            'an602.viglink.helper' => true,
            'an602.viglink.listener' => true,
            'plupload' => true,
            'profilefields.lang_helper' => true,
            'profilefields.manager' => true,
            'profilefields.type.bool' => true,
            'profilefields.type.date' => true,
            'profilefields.type.dropdown' => true,
            'profilefields.type.int' => true,
            'profilefields.type.string' => true,
            'profilefields.type.text' => true,
            'profilefields.type.url' => true,
            'profilefields.type_collection' => true,
            'request' => true,
            'request_stack' => true,
            'router' => true,
            'router.listener' => true,
            'routing.chained_resources_locator' => true,
            'routing.delegated_loader' => true,
            'routing.helper' => true,
            'routing.loader.collection' => true,
            'routing.loader.yaml' => true,
            'routing.resolver' => true,
            'routing.resources_locator.collection' => true,
            'routing.resources_locator.default' => true,
            'symfony_request' => true,
            'symfony_response_listener' => true,
            'template' => true,
            'template.twig.environment' => true,
            'template.twig.extensions.avatar' => true,
            'template.twig.extensions.collection' => true,
            'template.twig.extensions.config' => true,
            'template.twig.extensions.debug' => true,
            'template.twig.extensions.phpbb' => true,
            'template.twig.extensions.routing' => true,
            'template.twig.extensions.username' => true,
            'template.twig.lexer' => true,
            'template.twig.loader' => true,
            'template_context' => true,
            'text_formatter.acp_utils' => true,
            'text_formatter.data_access' => true,
            'text_formatter.s9e.bbcode_merger' => true,
            'text_formatter.s9e.factory' => true,
            'text_formatter.s9e.link_helper' => true,
            'text_formatter.s9e.parser' => true,
            'text_formatter.s9e.quote_helper' => true,
            'text_formatter.s9e.renderer' => true,
            'text_formatter.s9e.utils' => true,
            'text_reparser.contact_admin_info' => true,
            'text_reparser.forum_description' => true,
            'text_reparser.forum_rules' => true,
            'text_reparser.group_description' => true,
            'text_reparser.lock' => true,
            'text_reparser.manager' => true,
            'text_reparser.pm_text' => true,
            'text_reparser.poll_option' => true,
            'text_reparser.poll_title' => true,
            'text_reparser.post_text' => true,
            'text_reparser.user_signature' => true,
            'text_reparser_collection' => true,
            'upload_imagesize' => true,
            'user' => true,
            'user_loader' => true,
            'version_helper' => true,
            'viewonline_helper' => true,
        ];
        $this->aliases = [
            'text_formatter.cache' => 'text_formatter.s9e.factory',
            'text_formatter.parser' => 'text_formatter.s9e.parser',
            'text_formatter.renderer' => 'text_formatter.s9e.renderer',
            'text_formatter.utils' => 'text_formatter.s9e.utils',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'acl.permissions' => true,
            'attachment.delete' => true,
            'attachment.manager' => true,
            'attachment.resync' => true,
            'attachment.upload' => true,
            'auth' => true,
            'auth.provider.apache' => true,
            'auth.provider.db' => true,
            'auth.provider.ldap' => true,
            'auth.provider.oauth' => true,
            'auth.provider.oauth.service.bitly' => true,
            'auth.provider.oauth.service.facebook' => true,
            'auth.provider.oauth.service.google' => true,
            'auth.provider.oauth.service.twitter' => true,
            'auth.provider.oauth.service_collection' => true,
            'auth.provider_collection' => true,
            'avatar.driver.gravatar' => true,
            'avatar.driver.local' => true,
            'avatar.driver.remote' => true,
            'avatar.driver.upload' => true,
            'avatar.driver_collection' => true,
            'avatar.manager' => true,
            'cache' => true,
            'cache.driver' => true,
            'captcha.factory' => true,
            'captcha.plugins.service_collection' => true,
            'class_loader' => true,
            'class_loader.ext' => true,
            'config' => true,
            'config.php' => true,
            'config_text' => true,
            'console.command.cache.purge' => true,
            'console.command.config.delete' => true,
            'console.command.config.get' => true,
            'console.command.config.increment' => true,
            'console.command.config.set' => true,
            'console.command.config.set_atomic' => true,
            'console.command.cron.list' => true,
            'console.command.cron.run' => true,
            'console.command.db.list' => true,
            'console.command.db.migrate' => true,
            'console.command.db.revert' => true,
            'console.command.dev.migration_tips' => true,
            'console.command.extension.disable' => true,
            'console.command.extension.enable' => true,
            'console.command.extension.purge' => true,
            'console.command.extension.show' => true,
            'console.command.fixup.fix_left_right_ids' => true,
            'console.command.fixup.update_hashes' => true,
            'console.command.reparser.list' => true,
            'console.command.reparser.reparse' => true,
            'console.command.thumbnail.delete' => true,
            'console.command.thumbnail.generate' => true,
            'console.command.thumbnail.recreate' => true,
            'console.command.update.check' => true,
            'console.command.user.activate' => true,
            'console.command.user.add' => true,
            'console.command.user.delete' => true,
            'console.command.user.reclean' => true,
            'console.command_collection' => true,
            'console.exception_subscriber' => true,
            'content.visibility' => true,
            'controller.helper' => true,
            'controller.resolver' => true,
            'core.captcha.plugins.gd' => true,
            'core.captcha.plugins.gd_wave' => true,
            'core.captcha.plugins.nogd' => true,
            'core.captcha.plugins.qa' => true,
            'core.captcha.plugins.recaptcha' => true,
            'core.captcha.plugins.recaptcha_v3' => true,
            'cron.controller' => true,
            'cron.event_listener' => true,
            'cron.lock_db' => true,
            'cron.manager' => true,
            'cron.task.core.prune_all_forums' => true,
            'cron.task.core.prune_forum' => true,
            'cron.task.core.prune_notifications' => true,
            'cron.task.core.prune_shadow_topics' => true,
            'cron.task.core.queue' => true,
            'cron.task.core.tidy_cache' => true,
            'cron.task.core.tidy_database' => true,
            'cron.task.core.tidy_plupload' => true,
            'cron.task.core.tidy_search' => true,
            'cron.task.core.tidy_sessions' => true,
            'cron.task.core.tidy_warnings' => true,
            'cron.task.core.update_hashes' => true,
            'cron.task.text_reparser.pm_text' => true,
            'cron.task.text_reparser.poll_option' => true,
            'cron.task.text_reparser.poll_title' => true,
            'cron.task.text_reparser.post_text' => true,
            'cron.task.text_reparser.user_signature' => true,
            'cron.task_collection' => true,
            'dbal.conn' => true,
            'dbal.conn.driver' => true,
            'dbal.extractor' => true,
            'dbal.extractor.extractors.mssql_extractor' => true,
            'dbal.extractor.extractors.mysql_extractor' => true,
            'dbal.extractor.extractors.oracle_extractor' => true,
            'dbal.extractor.extractors.postgres_extractor' => true,
            'dbal.extractor.extractors.sqlite3_extractor' => true,
            'dbal.extractor.factory' => true,
            'dbal.tools' => true,
            'dbal.tools.factory' => true,
            'dispatcher' => true,
            'ext.manager' => true,
            'feed.forum' => true,
            'feed.forums' => true,
            'feed.helper' => true,
            'feed.news' => true,
            'feed.overall' => true,
            'feed.quote_helper' => true,
            'feed.topic' => true,
            'feed.topics' => true,
            'feed.topics_active' => true,
            'file_downloader' => true,
            'file_locator' => true,
            'files.factory' => true,
            'files.filespec' => true,
            'files.types.form' => true,
            'files.types.local' => true,
            'files.types.remote' => true,
            'files.upload' => true,
            'filesystem' => true,
            'group_helper' => true,
            'groupposition.legend' => true,
            'groupposition.teampage' => true,
            'hook_finder' => true,
            'http_kernel' => true,
            'kernel_exception_subscriber' => true,
            'kernel_terminate_subscriber' => true,
            'language' => true,
            'language.helper.language_file' => true,
            'language.loader' => true,
            'language.loader_abstract' => true,
            'log' => true,
            'message.form.admin' => true,
            'message.form.topic' => true,
            'message.form.user' => true,
            'migrator' => true,
            'migrator.helper' => true,
            'migrator.tool.config' => true,
            'migrator.tool.config_text' => true,
            'migrator.tool.module' => true,
            'migrator.tool.permission' => true,
            'migrator.tool_collection' => true,
            'mimetype.content_guesser' => true,
            'mimetype.extension_guesser' => true,
            'mimetype.filebinary_mimetype_guesser' => true,
            'mimetype.fileinfo_mimetype_guesser' => true,
            'mimetype.guesser' => true,
            'mimetype.guesser_collection' => true,
            'module.manager' => true,
            'notification.method.board' => true,
            'notification.method.email' => true,
            'notification.method.jabber' => true,
            'notification.method_collection' => true,
            'notification.type.admin_activate_user' => true,
            'notification.type.approve_post' => true,
            'notification.type.approve_topic' => true,
            'notification.type.base' => true,
            'notification.type.bookmark' => true,
            'notification.type.disapprove_post' => true,
            'notification.type.disapprove_topic' => true,
            'notification.type.forum' => true,
            'notification.type.group_request' => true,
            'notification.type.group_request_approved' => true,
            'notification.type.pm' => true,
            'notification.type.post' => true,
            'notification.type.post_in_queue' => true,
            'notification.type.quote' => true,
            'notification.type.report_pm' => true,
            'notification.type.report_pm_closed' => true,
            'notification.type.report_post' => true,
            'notification.type.report_post_closed' => true,
            'notification.type.topic' => true,
            'notification.type.topic_in_queue' => true,
            'notification.type_collection' => true,
            'notification_manager' => true,
            'pagination' => true,
            'passwords.driver.argon2i' => true,
            'passwords.driver.argon2id' => true,
            'passwords.driver.bcrypt' => true,
            'passwords.driver.bcrypt_2y' => true,
            'passwords.driver.bcrypt_wcf2' => true,
            'passwords.driver.convert_password' => true,
            'passwords.driver.md5_mybb' => true,
            'passwords.driver.md5_phpbb2' => true,
            'passwords.driver.md5_vb' => true,
            'passwords.driver.phpass' => true,
            'passwords.driver.salted_md5' => true,
            'passwords.driver.sha1' => true,
            'passwords.driver.sha1_smf' => true,
            'passwords.driver.sha1_wcf1' => true,
            'passwords.driver_collection' => true,
            'passwords.driver_helper' => true,
            'passwords.helper' => true,
            'passwords.manager' => true,
            'passwords.update.lock' => true,
            'path_helper' => true,
            'php_ini' => true,
            'an602.feed.controller' => true,
            'an602.help.controller.bbcode' => true,
            'an602.help.controller.faq' => true,
            'an602.help.manager' => true,
            'an602.report.controller' => true,
            'an602.report.handler_factory' => true,
            'an602.report.handlers.report_handler_pm' => true,
            'an602.report.handlers.report_handler_post' => true,
            'an602.report.report_reason_list_provider' => true,
            'an602.ucp.controller.reset_password' => true,
            'an602.viglink.acp_listener' => true,
            'an602.viglink.cron.task.viglink' => true,
            'an602.viglink.helper' => true,
            'an602.viglink.listener' => true,
            'plupload' => true,
            'profilefields.lang_helper' => true,
            'profilefields.manager' => true,
            'profilefields.type.bool' => true,
            'profilefields.type.date' => true,
            'profilefields.type.dropdown' => true,
            'profilefields.type.int' => true,
            'profilefields.type.string' => true,
            'profilefields.type.text' => true,
            'profilefields.type.url' => true,
            'profilefields.type_collection' => true,
            'request' => true,
            'request_stack' => true,
            'router' => true,
            'router.listener' => true,
            'routing.chained_resources_locator' => true,
            'routing.delegated_loader' => true,
            'routing.helper' => true,
            'routing.loader.collection' => true,
            'routing.loader.yaml' => true,
            'routing.resolver' => true,
            'routing.resources_locator.collection' => true,
            'routing.resources_locator.default' => true,
            'symfony_request' => true,
            'symfony_response_listener' => true,
            'template' => true,
            'template.twig.environment' => true,
            'template.twig.extensions.avatar' => true,
            'template.twig.extensions.collection' => true,
            'template.twig.extensions.config' => true,
            'template.twig.extensions.debug' => true,
            'template.twig.extensions.phpbb' => true,
            'template.twig.extensions.routing' => true,
            'template.twig.extensions.username' => true,
            'template.twig.lexer' => true,
            'template.twig.loader' => true,
            'template_context' => true,
            'text_formatter.acp_utils' => true,
            'text_formatter.cache' => true,
            'text_formatter.data_access' => true,
            'text_formatter.parser' => true,
            'text_formatter.renderer' => true,
            'text_formatter.s9e.bbcode_merger' => true,
            'text_formatter.s9e.factory' => true,
            'text_formatter.s9e.link_helper' => true,
            'text_formatter.s9e.parser' => true,
            'text_formatter.s9e.quote_helper' => true,
            'text_formatter.s9e.renderer' => true,
            'text_formatter.s9e.utils' => true,
            'text_formatter.utils' => true,
            'text_reparser.contact_admin_info' => true,
            'text_reparser.forum_description' => true,
            'text_reparser.forum_rules' => true,
            'text_reparser.group_description' => true,
            'text_reparser.lock' => true,
            'text_reparser.manager' => true,
            'text_reparser.pm_text' => true,
            'text_reparser.poll_option' => true,
            'text_reparser.poll_title' => true,
            'text_reparser.post_text' => true,
            'text_reparser.user_signature' => true,
            'text_reparser_collection' => true,
            'upload_imagesize' => true,
            'user' => true,
            'user_loader' => true,
            'version_helper' => true,
            'viewonline_helper' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function createProxy($class, \Closure $factory)
    {
        return $factory();
    }

    /**
     * Gets the private 'acl.permissions' shared service.
     *
     * @return \an602\permissions
     */
    protected function getAcl_PermissionsService()
    {
        return $this->services['acl.permissions'] = new \an602\permissions(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'attachment.delete' service.
     *
     * @return \an602\attachment\delete
     */
    protected function getAttachment_DeleteService()
    {
        $a = ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'};

        return new \an602\attachment\delete(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, $a, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, new \an602\attachment\resync($a), './../');
    }

    /**
     * Gets the private 'attachment.manager' service.
     *
     * @return \an602\attachment\manager
     */
    protected function getAttachment_ManagerService()
    {
        $a = ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'};
        $c = ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'};
        $e = ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'};

        return new \an602\attachment\manager(new \an602\attachment\delete($a, $b, $c, $d, new \an602\attachment\resync($b), './../'), new \an602\attachment\resync($b), new \an602\attachment\upload(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, $a, new \an602\files\upload($d, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \an602\files\factory($this))) && false ?: '_'}, $e, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}), $e, ${($_ = isset($this->services['mimetype.guesser']) ? $this->services['mimetype.guesser'] : $this->getMimetype_GuesserService()) && false ?: '_'}, $c, ${($_ = isset($this->services['plupload']) ? $this->services['plupload'] : $this->getPluploadService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../'));
    }

    /**
     * Gets the private 'attachment.resync' service.
     *
     * @return \an602\attachment\resync
     */
    protected function getAttachment_ResyncService()
    {
        return new \an602\attachment\resync(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'attachment.upload' service.
     *
     * @return \an602\attachment\upload
     */
    protected function getAttachment_UploadService()
    {
        $a = ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'};

        return new \an602\attachment\upload(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, new \an602\files\upload(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \an602\files\factory($this))) && false ?: '_'}, $a, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}), $a, ${($_ = isset($this->services['mimetype.guesser']) ? $this->services['mimetype.guesser'] : $this->getMimetype_GuesserService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['plupload']) ? $this->services['plupload'] : $this->getPluploadService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../');
    }

    /**
     * Gets the private 'auth' shared service.
     *
     * @return \an602\auth\auth
     */
    protected function getAuthService()
    {
        return $this->services['auth'] = new \an602\auth\auth();
    }

    /**
     * Gets the private 'auth.provider.apache' shared service.
     *
     * @return \an602\auth\provider\apache
     */
    protected function getAuth_Provider_ApacheService()
    {
        return $this->services['auth.provider.apache'] = new \an602\auth\provider\apache(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'auth.provider.db' shared service.
     *
     * @return \an602\auth\provider\db
     */
    protected function getAuth_Provider_DbService()
    {
        return $this->services['auth.provider.db'] = new \an602\auth\provider\db(${($_ = isset($this->services['captcha.factory']) ? $this->services['captcha.factory'] : $this->getCaptcha_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'auth.provider.ldap' shared service.
     *
     * @return \an602\auth\provider\ldap
     */
    protected function getAuth_Provider_LdapService()
    {
        return $this->services['auth.provider.ldap'] = new \an602\auth\provider\ldap(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth' shared service.
     *
     * @return \an602\auth\provider\oauth\oauth
     */
    protected function getAuth_Provider_OauthService()
    {
        return $this->services['auth.provider.oauth'] = new \an602\auth\provider\oauth\oauth(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['auth.provider.db']) ? $this->services['auth.provider.db'] : $this->getAuth_Provider_DbService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['auth.provider.oauth.service_collection']) ? $this->services['auth.provider.oauth.service_collection'] : $this->getAuth_Provider_Oauth_ServiceCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'an602_oauth_tokens', 'an602_oauth_states', 'an602_oauth_accounts', 'an602_users', './../', 'php');
    }

    /**
     * Gets the private 'auth.provider.oauth.service.bitly' shared service.
     *
     * @return \an602\auth\provider\oauth\service\bitly
     */
    protected function getAuth_Provider_Oauth_Service_BitlyService()
    {
        return $this->services['auth.provider.oauth.service.bitly'] = new \an602\auth\provider\oauth\service\bitly(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth.service.facebook' shared service.
     *
     * @return \an602\auth\provider\oauth\service\facebook
     */
    protected function getAuth_Provider_Oauth_Service_FacebookService()
    {
        return $this->services['auth.provider.oauth.service.facebook'] = new \an602\auth\provider\oauth\service\facebook(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth.service.google' shared service.
     *
     * @return \an602\auth\provider\oauth\service\google
     */
    protected function getAuth_Provider_Oauth_Service_GoogleService()
    {
        return $this->services['auth.provider.oauth.service.google'] = new \an602\auth\provider\oauth\service\google(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth.service.twitter' shared service.
     *
     * @return \an602\auth\provider\oauth\service\twitter
     */
    protected function getAuth_Provider_Oauth_Service_TwitterService()
    {
        return $this->services['auth.provider.oauth.service.twitter'] = new \an602\auth\provider\oauth\service\twitter(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'auth.provider.oauth.service_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getAuth_Provider_Oauth_ServiceCollectionService()
    {
        $this->services['auth.provider.oauth.service_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('auth.provider.oauth.service.bitly');
        $instance->add('auth.provider.oauth.service.facebook');
        $instance->add('auth.provider.oauth.service.google');
        $instance->add('auth.provider.oauth.service.twitter');

        return $instance;
    }

    /**
     * Gets the private 'auth.provider_collection' shared service.
     *
     * @return \an602\auth\provider_collection
     */
    protected function getAuth_ProviderCollectionService()
    {
        $this->services['auth.provider_collection'] = $instance = new \an602\auth\provider_collection($this, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        $instance->add('auth.provider.db');
        $instance->add('auth.provider.apache');
        $instance->add('auth.provider.ldap');
        $instance->add('auth.provider.oauth');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver.gravatar' shared service.
     *
     * @return \an602\avatar\driver\gravatar
     */
    protected function getAvatar_Driver_GravatarService()
    {
        $this->services['avatar.driver.gravatar'] = $instance = new \an602\avatar\driver\gravatar(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['upload_imagesize']) ? $this->services['upload_imagesize'] : ($this->services['upload_imagesize'] = new \FastImageSize\FastImageSize())) && false ?: '_'}, './../', 'php', ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});

        $instance->set_name('avatar.driver.gravatar');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver.local' shared service.
     *
     * @return \an602\avatar\driver\local
     */
    protected function getAvatar_Driver_LocalService()
    {
        $this->services['avatar.driver.local'] = $instance = new \an602\avatar\driver\local(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['upload_imagesize']) ? $this->services['upload_imagesize'] : ($this->services['upload_imagesize'] = new \FastImageSize\FastImageSize())) && false ?: '_'}, './../', 'php', ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});

        $instance->set_name('avatar.driver.local');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver.remote' shared service.
     *
     * @return \an602\avatar\driver\remote
     */
    protected function getAvatar_Driver_RemoteService()
    {
        $this->services['avatar.driver.remote'] = $instance = new \an602\avatar\driver\remote(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['upload_imagesize']) ? $this->services['upload_imagesize'] : ($this->services['upload_imagesize'] = new \FastImageSize\FastImageSize())) && false ?: '_'}, './../', 'php', ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});

        $instance->set_name('avatar.driver.remote');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver.upload' shared service.
     *
     * @return \an602\avatar\driver\upload
     */
    protected function getAvatar_Driver_UploadService()
    {
        $this->services['avatar.driver.upload'] = $instance = new \an602\avatar\driver\upload(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, './../', 'php', ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \an602\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});

        $instance->set_name('avatar.driver.upload');

        return $instance;
    }

    /**
     * Gets the private 'avatar.driver_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getAvatar_DriverCollectionService()
    {
        $this->services['avatar.driver_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('avatar.driver.gravatar');
        $instance->add('avatar.driver.local');
        $instance->add('avatar.driver.remote');
        $instance->add('avatar.driver.upload');

        return $instance;
    }

    /**
     * Gets the private 'avatar.manager' shared service.
     *
     * @return \an602\avatar\manager
     */
    protected function getAvatar_ManagerService()
    {
        return $this->services['avatar.manager'] = new \an602\avatar\manager(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['avatar.driver_collection']) ? $this->services['avatar.driver_collection'] : $this->getAvatar_DriverCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache' shared service.
     *
     * @return \an602\cache\service
     */
    protected function getCacheService()
    {
        return $this->services['cache'] = new \an602\cache\service(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'cache.driver' shared service.
     *
     * @return \an602\cache\driver\file
     */
    protected function getCache_DriverService()
    {
        return $this->services['cache.driver'] = new \an602\cache\driver\file();
    }

    /**
     * Gets the private 'captcha.factory' shared service.
     *
     * @return \an602\captcha\factory
     */
    protected function getCaptcha_FactoryService()
    {
        return $this->services['captcha.factory'] = new \an602\captcha\factory($this, ${($_ = isset($this->services['captcha.plugins.service_collection']) ? $this->services['captcha.plugins.service_collection'] : $this->getCaptcha_Plugins_ServiceCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'captcha.plugins.service_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getCaptcha_Plugins_ServiceCollectionService()
    {
        $this->services['captcha.plugins.service_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('core.captcha.plugins.gd');
        $instance->add('core.captcha.plugins.gd_wave');
        $instance->add('core.captcha.plugins.nogd');
        $instance->add('core.captcha.plugins.qa');
        $instance->add('core.captcha.plugins.recaptcha');
        $instance->add('core.captcha.plugins.recaptcha_v3');

        return $instance;
    }

    /**
     * Gets the private 'class_loader' shared service.
     *
     * @return \an602\class_loader
     */
    protected function getClassLoaderService()
    {
        $this->services['class_loader'] = $instance = new \an602\class_loader('an602\\', './../includes/', 'php');

        $instance->register();
        $instance->set_cache(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'class_loader.ext' shared service.
     *
     * @return \an602\class_loader
     */
    protected function getClassLoader_ExtService()
    {
        $this->services['class_loader.ext'] = $instance = new \an602\class_loader('\\', './../ext/', 'php');

        $instance->register();
        $instance->set_cache(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'config' shared service.
     *
     * @return \an602\config\db
     */
    protected function getConfigService()
    {
        return $this->services['config'] = new \an602\config\db(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, 'an602_config');
    }

    /**
     * Gets the private 'config_text' shared service.
     *
     * @return \an602\config\db_text
     */
    protected function getConfigTextService()
    {
        return $this->services['config_text'] = new \an602\config\db_text(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_config_text');
    }

    /**
     * Gets the private 'console.command.cache.purge' shared service.
     *
     * @return \an602\console\command\cache\purge
     */
    protected function getConsole_Command_Cache_PurgeService()
    {
        return $this->services['console.command.cache.purge'] = new \an602\console\command\cache\purge(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.delete' shared service.
     *
     * @return \an602\console\command\config\delete
     */
    protected function getConsole_Command_Config_DeleteService()
    {
        return $this->services['console.command.config.delete'] = new \an602\console\command\config\delete(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.get' shared service.
     *
     * @return \an602\console\command\config\get
     */
    protected function getConsole_Command_Config_GetService()
    {
        return $this->services['console.command.config.get'] = new \an602\console\command\config\get(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.increment' shared service.
     *
     * @return \an602\console\command\config\increment
     */
    protected function getConsole_Command_Config_IncrementService()
    {
        return $this->services['console.command.config.increment'] = new \an602\console\command\config\increment(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.set' shared service.
     *
     * @return \an602\console\command\config\set
     */
    protected function getConsole_Command_Config_SetService()
    {
        return $this->services['console.command.config.set'] = new \an602\console\command\config\set(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.config.set_atomic' shared service.
     *
     * @return \an602\console\command\config\set_atomic
     */
    protected function getConsole_Command_Config_SetAtomicService()
    {
        return $this->services['console.command.config.set_atomic'] = new \an602\console\command\config\set_atomic(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.cron.list' shared service.
     *
     * @return \an602\console\command\cron\cron_list
     */
    protected function getConsole_Command_Cron_ListService()
    {
        return $this->services['console.command.cron.list'] = new \an602\console\command\cron\cron_list(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['cron.manager']) ? $this->services['cron.manager'] : $this->getCron_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.cron.run' shared service.
     *
     * @return \an602\console\command\cron\run
     */
    protected function getConsole_Command_Cron_RunService()
    {
        return $this->services['console.command.cron.run'] = new \an602\console\command\cron\run(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['cron.manager']) ? $this->services['cron.manager'] : $this->getCron_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['cron.lock_db']) ? $this->services['cron.lock_db'] : $this->getCron_LockDbService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.db.list' shared service.
     *
     * @return \an602\console\command\db\list_command
     */
    protected function getConsole_Command_Db_ListService()
    {
        return $this->services['console.command.db.list'] = new \an602\console\command\db\list_command(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['migrator']) ? $this->services['migrator'] : $this->getMigratorService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.db.migrate' shared service.
     *
     * @return \an602\console\command\db\migrate
     */
    protected function getConsole_Command_Db_MigrateService()
    {
        return $this->services['console.command.db.migrate'] = new \an602\console\command\db\migrate(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['migrator']) ? $this->services['migrator'] : $this->getMigratorService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, './../');
    }

    /**
     * Gets the private 'console.command.db.revert' shared service.
     *
     * @return \an602\console\command\db\revert
     */
    protected function getConsole_Command_Db_RevertService()
    {
        return $this->services['console.command.db.revert'] = new \an602\console\command\db\revert(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['migrator']) ? $this->services['migrator'] : $this->getMigratorService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, './../');
    }

    /**
     * Gets the private 'console.command.dev.migration_tips' shared service.
     *
     * @return \an602\console\command\dev\migration_tips
     */
    protected function getConsole_Command_Dev_MigrationTipsService()
    {
        return $this->services['console.command.dev.migration_tips'] = new \an602\console\command\dev\migration_tips(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.extension.disable' shared service.
     *
     * @return \an602\console\command\extension\disable
     */
    protected function getConsole_Command_Extension_DisableService()
    {
        return $this->services['console.command.extension.disable'] = new \an602\console\command\extension\disable(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, 'an602\\cache\\driver\\file');
    }

    /**
     * Gets the private 'console.command.extension.enable' shared service.
     *
     * @return \an602\console\command\extension\enable
     */
    protected function getConsole_Command_Extension_EnableService()
    {
        return $this->services['console.command.extension.enable'] = new \an602\console\command\extension\enable(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, 'an602\\cache\\driver\\file');
    }

    /**
     * Gets the private 'console.command.extension.purge' shared service.
     *
     * @return \an602\console\command\extension\purge
     */
    protected function getConsole_Command_Extension_PurgeService()
    {
        return $this->services['console.command.extension.purge'] = new \an602\console\command\extension\purge(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, 'an602\\cache\\driver\\file');
    }

    /**
     * Gets the private 'console.command.extension.show' shared service.
     *
     * @return \an602\console\command\extension\show
     */
    protected function getConsole_Command_Extension_ShowService()
    {
        return $this->services['console.command.extension.show'] = new \an602\console\command\extension\show(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, 'an602\\cache\\driver\\file');
    }

    /**
     * Gets the private 'console.command.fixup.fix_left_right_ids' shared service.
     *
     * @return \an602\console\command\fixup\fix_left_right_ids
     */
    protected function getConsole_Command_Fixup_FixLeftRightIdsService()
    {
        return $this->services['console.command.fixup.fix_left_right_ids'] = new \an602\console\command\fixup\fix_left_right_ids(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.fixup.update_hashes' shared service.
     *
     * @return \an602\console\command\fixup\update_hashes
     */
    protected function getConsole_Command_Fixup_UpdateHashesService()
    {
        return $this->services['console.command.fixup.update_hashes'] = new \an602\console\command\fixup\update_hashes(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_collection']) ? $this->services['passwords.driver_collection'] : $this->getPasswords_DriverCollectionService()) && false ?: '_'}, $this->parameters['passwords.algorithms']);
    }

    /**
     * Gets the private 'console.command.reparser.list' shared service.
     *
     * @return \an602\console\command\reparser\list_all
     */
    protected function getConsole_Command_Reparser_ListService()
    {
        return $this->services['console.command.reparser.list'] = new \an602\console\command\reparser\list_all(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.reparser.reparse' shared service.
     *
     * @return \an602\console\command\reparser\reparse
     */
    protected function getConsole_Command_Reparser_ReparseService()
    {
        return $this->services['console.command.reparser.reparse'] = new \an602\console\command\reparser\reparse(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.thumbnail.delete' shared service.
     *
     * @return \an602\console\command\thumbnail\delete
     */
    protected function getConsole_Command_Thumbnail_DeleteService()
    {
        return $this->services['console.command.thumbnail.delete'] = new \an602\console\command\thumbnail\delete(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, './../');
    }

    /**
     * Gets the private 'console.command.thumbnail.generate' shared service.
     *
     * @return \an602\console\command\thumbnail\generate
     */
    protected function getConsole_Command_Thumbnail_GenerateService()
    {
        return $this->services['console.command.thumbnail.generate'] = new \an602\console\command\thumbnail\generate(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'console.command.thumbnail.recreate' shared service.
     *
     * @return \an602\console\command\thumbnail\recreate
     */
    protected function getConsole_Command_Thumbnail_RecreateService()
    {
        return $this->services['console.command.thumbnail.recreate'] = new \an602\console\command\thumbnail\recreate(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.update.check' shared service.
     *
     * @return \an602\console\command\update\check
     */
    protected function getConsole_Command_Update_CheckService()
    {
        return $this->services['console.command.update.check'] = new \an602\console\command\update\check(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, $this, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command.user.activate' shared service.
     *
     * @return \an602\console\command\user\activate
     */
    protected function getConsole_Command_User_ActivateService()
    {
        return $this->services['console.command.user.activate'] = new \an602\console\command\user\activate(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'}, ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'console.command.user.add' shared service.
     *
     * @return \an602\console\command\user\add
     */
    protected function getConsole_Command_User_AddService()
    {
        return $this->services['console.command.user.add'] = new \an602\console\command\user\add(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'console.command.user.delete' shared service.
     *
     * @return \an602\console\command\user\delete
     */
    protected function getConsole_Command_User_DeleteService()
    {
        return $this->services['console.command.user.delete'] = new \an602\console\command\user\delete(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'console.command.user.reclean' shared service.
     *
     * @return \an602\console\command\user\reclean
     */
    protected function getConsole_Command_User_RecleanService()
    {
        return $this->services['console.command.user.reclean'] = new \an602\console\command\user\reclean(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'console.command_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getConsole_CommandCollectionService()
    {
        $this->services['console.command_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('console.command.cache.purge');
        $instance->add('console.command.config.delete');
        $instance->add('console.command.config.increment');
        $instance->add('console.command.config.get');
        $instance->add('console.command.config.set');
        $instance->add('console.command.config.set_atomic');
        $instance->add('console.command.cron.list');
        $instance->add('console.command.cron.run');
        $instance->add('console.command.db.list');
        $instance->add('console.command.db.migrate');
        $instance->add('console.command.db.revert');
        $instance->add('console.command.dev.migration_tips');
        $instance->add('console.command.extension.disable');
        $instance->add('console.command.extension.enable');
        $instance->add('console.command.extension.purge');
        $instance->add('console.command.extension.show');
        $instance->add('console.command.fixup.update_hashes');
        $instance->add('console.command.fixup.fix_left_right_ids');
        $instance->add('console.command.reparser.list');
        $instance->add('console.command.reparser.reparse');
        $instance->add('console.command.thumbnail.delete');
        $instance->add('console.command.thumbnail.generate');
        $instance->add('console.command.thumbnail.recreate');
        $instance->add('console.command.update.check');
        $instance->add('console.command.user.activate');
        $instance->add('console.command.user.add');
        $instance->add('console.command.user.delete');
        $instance->add('console.command.user.reclean');

        return $instance;
    }

    /**
     * Gets the private 'console.exception_subscriber' shared service.
     *
     * @return \an602\console\exception_subscriber
     */
    protected function getConsole_ExceptionSubscriberService()
    {
        return $this->services['console.exception_subscriber'] = new \an602\console\exception_subscriber(${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'content.visibility' shared service.
     *
     * @return \an602\content_visibility
     */
    protected function getContent_VisibilityService()
    {
        return $this->services['content.visibility'] = new \an602\content_visibility(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../', 'php', 'an602_forums', 'an602_posts', 'an602_topics', 'an602_users');
    }

    /**
     * Gets the private 'controller.helper' shared service.
     *
     * @return \an602\controller\helper
     */
    protected function getController_HelperService()
    {
        return $this->services['controller.helper'] = new \an602\controller\helper(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cron.manager']) ? $this->services['cron.manager'] : $this->getCron_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['routing.helper']) ? $this->services['routing.helper'] : $this->getRouting_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['symfony_request']) ? $this->services['symfony_request'] : $this->getSymfonyRequestService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../', 'admin/', 'php', false);
    }

    /**
     * Gets the private 'controller.resolver' shared service.
     *
     * @return \an602\controller\resolver
     */
    protected function getController_ResolverService()
    {
        return $this->services['controller.resolver'] = new \an602\controller\resolver($this, './../', ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'core.captcha.plugins.gd' service.
     *
     * @return \an602\captcha\plugins\gd
     */
    protected function getCore_Captcha_Plugins_GdService()
    {
        $instance = new \an602\captcha\plugins\gd();

        $instance->set_name('core.captcha.plugins.gd');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.gd_wave' service.
     *
     * @return \an602\captcha\plugins\gd_wave
     */
    protected function getCore_Captcha_Plugins_GdWaveService()
    {
        $instance = new \an602\captcha\plugins\gd_wave();

        $instance->set_name('core.captcha.plugins.gd_wave');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.nogd' service.
     *
     * @return \an602\captcha\plugins\nogd
     */
    protected function getCore_Captcha_Plugins_NogdService()
    {
        $instance = new \an602\captcha\plugins\nogd();

        $instance->set_name('core.captcha.plugins.nogd');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.qa' service.
     *
     * @return \an602\captcha\plugins\qa
     */
    protected function getCore_Captcha_Plugins_QaService()
    {
        $instance = new \an602\captcha\plugins\qa('an602_captcha_questions', 'an602_captcha_answers', 'an602_qa_confirm');

        $instance->set_name('core.captcha.plugins.qa');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.recaptcha' service.
     *
     * @return \an602\captcha\plugins\recaptcha
     */
    protected function getCore_Captcha_Plugins_RecaptchaService()
    {
        $instance = new \an602\captcha\plugins\recaptcha();

        $instance->set_name('core.captcha.plugins.recaptcha');

        return $instance;
    }

    /**
     * Gets the private 'core.captcha.plugins.recaptcha_v3' service.
     *
     * @return \an602\captcha\plugins\recaptcha_v3
     */
    protected function getCore_Captcha_Plugins_RecaptchaV3Service()
    {
        $instance = new \an602\captcha\plugins\recaptcha_v3();

        $instance->set_name('core.captcha.plugins.recaptcha_v3');

        return $instance;
    }

    /**
     * Gets the private 'cron.controller' shared service.
     *
     * @return \an602\cron\controller\cron
     */
    protected function getCron_ControllerService()
    {
        return $this->services['cron.controller'] = new \an602\cron\controller\cron();
    }

    /**
     * Gets the private 'cron.event_listener' shared service.
     *
     * @return \an602\cron\event\cron_runner_listener
     */
    protected function getCron_EventListenerService()
    {
        return $this->services['cron.event_listener'] = new \an602\cron\event\cron_runner_listener(${($_ = isset($this->services['cron.lock_db']) ? $this->services['cron.lock_db'] : $this->getCron_LockDbService()) && false ?: '_'}, ${($_ = isset($this->services['cron.manager']) ? $this->services['cron.manager'] : $this->getCron_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'cron.lock_db' shared service.
     *
     * @return \an602\lock\db
     */
    protected function getCron_LockDbService()
    {
        return $this->services['cron.lock_db'] = new \an602\lock\db('cron_lock', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'cron.manager' shared service.
     *
     * @return \an602\cron\manager
     */
    protected function getCron_ManagerService()
    {
        return $this->services['cron.manager'] = new \an602\cron\manager($this, ${($_ = isset($this->services['routing.helper']) ? $this->services['routing.helper'] : $this->getRouting_HelperService()) && false ?: '_'}, './../', 'php', ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cron.task.core.prune_all_forums' shared service.
     *
     * @return \an602\cron\task\core\prune_all_forums
     */
    protected function getCron_Task_Core_PruneAllForumsService()
    {
        $this->services['cron.task.core.prune_all_forums'] = $instance = new \an602\cron\task\core\prune_all_forums('./../', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'});

        $instance->set_name('cron.task.core.prune_all_forums');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.prune_forum' shared service.
     *
     * @return \an602\cron\task\core\prune_forum
     */
    protected function getCron_Task_Core_PruneForumService()
    {
        $this->services['cron.task.core.prune_forum'] = $instance = new \an602\cron\task\core\prune_forum('./../', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'});

        $instance->set_name('cron.task.core.prune_forum');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.prune_notifications' shared service.
     *
     * @return \an602\cron\task\core\prune_notifications
     */
    protected function getCron_Task_Core_PruneNotificationsService()
    {
        $this->services['cron.task.core.prune_notifications'] = $instance = new \an602\cron\task\core\prune_notifications(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'});

        $instance->set_name('cron.task.core.prune_notifications');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.prune_shadow_topics' shared service.
     *
     * @return \an602\cron\task\core\prune_shadow_topics
     */
    protected function getCron_Task_Core_PruneShadowTopicsService()
    {
        $this->services['cron.task.core.prune_shadow_topics'] = $instance = new \an602\cron\task\core\prune_shadow_topics('./../', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});

        $instance->set_name('cron.task.core.prune_shadow_topics');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.queue' shared service.
     *
     * @return \an602\cron\task\core\queue
     */
    protected function getCron_Task_Core_QueueService()
    {
        $this->services['cron.task.core.queue'] = $instance = new \an602\cron\task\core\queue('./../', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, './../cache/production/');

        $instance->set_name('cron.task.core.queue');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_cache' shared service.
     *
     * @return \an602\cron\task\core\tidy_cache
     */
    protected function getCron_Task_Core_TidyCacheService()
    {
        $this->services['cron.task.core.tidy_cache'] = $instance = new \an602\cron\task\core\tidy_cache(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_cache');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_database' shared service.
     *
     * @return \an602\cron\task\core\tidy_database
     */
    protected function getCron_Task_Core_TidyDatabaseService()
    {
        $this->services['cron.task.core.tidy_database'] = $instance = new \an602\cron\task\core\tidy_database('./../', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_database');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_plupload' shared service.
     *
     * @return \an602\cron\task\core\tidy_plupload
     */
    protected function getCron_Task_Core_TidyPluploadService()
    {
        $this->services['cron.task.core.tidy_plupload'] = $instance = new \an602\cron\task\core\tidy_plupload('./../', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_plupload');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_search' shared service.
     *
     * @return \an602\cron\task\core\tidy_search
     */
    protected function getCron_Task_Core_TidySearchService()
    {
        $this->services['cron.task.core.tidy_search'] = $instance = new \an602\cron\task\core\tidy_search('./../', 'php', ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_search');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_sessions' shared service.
     *
     * @return \an602\cron\task\core\tidy_sessions
     */
    protected function getCron_Task_Core_TidySessionsService()
    {
        $this->services['cron.task.core.tidy_sessions'] = $instance = new \an602\cron\task\core\tidy_sessions(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_sessions');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.tidy_warnings' shared service.
     *
     * @return \an602\cron\task\core\tidy_warnings
     */
    protected function getCron_Task_Core_TidyWarningsService()
    {
        $this->services['cron.task.core.tidy_warnings'] = $instance = new \an602\cron\task\core\tidy_warnings('./../', 'php', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        $instance->set_name('cron.task.core.tidy_warnings');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.core.update_hashes' shared service.
     *
     * @return \an602\cron\task\core\update_hashes
     */
    protected function getCron_Task_Core_UpdateHashesService()
    {
        $this->services['cron.task.core.update_hashes'] = $instance = new \an602\cron\task\core\update_hashes(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['passwords.update.lock']) ? $this->services['passwords.update.lock'] : $this->getPasswords_Update_LockService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_collection']) ? $this->services['passwords.driver_collection'] : $this->getPasswords_DriverCollectionService()) && false ?: '_'}, $this->parameters['passwords.algorithms']);

        $instance->set_name('cron.task.core.update_hashes');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.pm_text' shared service.
     *
     * @return \an602\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PmTextService()
    {
        $this->services['cron.task.text_reparser.pm_text'] = $instance = new \an602\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.pm_text');
        $instance->set_reparser('text_reparser.pm_text');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.poll_option' shared service.
     *
     * @return \an602\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PollOptionService()
    {
        $this->services['cron.task.text_reparser.poll_option'] = $instance = new \an602\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.poll_option');
        $instance->set_reparser('text_reparser.poll_option');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.poll_title' shared service.
     *
     * @return \an602\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PollTitleService()
    {
        $this->services['cron.task.text_reparser.poll_title'] = $instance = new \an602\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.poll_title');
        $instance->set_reparser('text_reparser.poll_title');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.post_text' shared service.
     *
     * @return \an602\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_PostTextService()
    {
        $this->services['cron.task.text_reparser.post_text'] = $instance = new \an602\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.post_text');
        $instance->set_reparser('text_reparser.post_text');

        return $instance;
    }

    /**
     * Gets the private 'cron.task.text_reparser.user_signature' shared service.
     *
     * @return \an602\cron\task\text_reparser\reparser
     */
    protected function getCron_Task_TextReparser_UserSignatureService()
    {
        $this->services['cron.task.text_reparser.user_signature'] = $instance = new \an602\cron\task\text_reparser\reparser(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.lock']) ? $this->services['text_reparser.lock'] : $this->getTextReparser_LockService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser.manager']) ? $this->services['text_reparser.manager'] : $this->getTextReparser_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});

        $instance->set_name('cron.task.text_reparser.user_signature');
        $instance->set_reparser('text_reparser.user_signature');

        return $instance;
    }

    /**
     * Gets the private 'cron.task_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getCron_TaskCollectionService()
    {
        $this->services['cron.task_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('cron.task.core.prune_all_forums');
        $instance->add('cron.task.core.prune_forum');
        $instance->add('cron.task.core.prune_shadow_topics');
        $instance->add('cron.task.core.prune_notifications');
        $instance->add('cron.task.core.queue');
        $instance->add('cron.task.core.tidy_cache');
        $instance->add('cron.task.core.tidy_database');
        $instance->add('cron.task.core.tidy_plupload');
        $instance->add('cron.task.core.tidy_search');
        $instance->add('cron.task.core.tidy_sessions');
        $instance->add('cron.task.core.tidy_warnings');
        $instance->add('cron.task.text_reparser.pm_text');
        $instance->add('cron.task.text_reparser.poll_option');
        $instance->add('cron.task.text_reparser.poll_title');
        $instance->add('cron.task.text_reparser.post_text');
        $instance->add('cron.task.text_reparser.user_signature');
        $instance->add('cron.task.core.update_hashes');
        $instance->add('an602.viglink.cron.task.viglink');

        return $instance;
    }

    /**
     * Gets the private 'dbal.conn' shared service.
     *
     * @return \an602\db\driver\factory
     */
    protected function getDbal_ConnService()
    {
        return $this->services['dbal.conn'] = new \an602\db\driver\factory($this);
    }

    /**
     * Gets the private 'dbal.extractor' shared service.
     *
     * @return \an602\db\extractor\extractor_interface
     */
    protected function getDbal_ExtractorService()
    {
        return $this->services['dbal.extractor'] = ${($_ = isset($this->services['dbal.extractor.factory']) ? $this->services['dbal.extractor.factory'] : ($this->services['dbal.extractor.factory'] = new \an602\db\extractor\factory(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, $this))) && false ?: '_'}->get();
    }

    /**
     * Gets the private 'dbal.extractor.extractors.mssql_extractor' service.
     *
     * @return \an602\db\extractor\mssql_extractor
     */
    protected function getDbal_Extractor_Extractors_MssqlExtractorService()
    {
        return new \an602\db\extractor\mssql_extractor('./../', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.extractors.mysql_extractor' service.
     *
     * @return \an602\db\extractor\mysql_extractor
     */
    protected function getDbal_Extractor_Extractors_MysqlExtractorService()
    {
        return new \an602\db\extractor\mysql_extractor('./../', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.extractors.oracle_extractor' service.
     *
     * @return \an602\db\extractor\oracle_extractor
     */
    protected function getDbal_Extractor_Extractors_OracleExtractorService()
    {
        return new \an602\db\extractor\oracle_extractor('./../', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.extractors.postgres_extractor' service.
     *
     * @return \an602\db\extractor\postgres_extractor
     */
    protected function getDbal_Extractor_Extractors_PostgresExtractorService()
    {
        return new \an602\db\extractor\postgres_extractor('./../', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.extractors.sqlite3_extractor' service.
     *
     * @return \an602\db\extractor\sqlite3_extractor
     */
    protected function getDbal_Extractor_Extractors_Sqlite3ExtractorService()
    {
        return new \an602\db\extractor\sqlite3_extractor('./../', ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.extractor.factory' shared service.
     *
     * @return \an602\db\extractor\factory
     */
    protected function getDbal_Extractor_FactoryService()
    {
        return $this->services['dbal.extractor.factory'] = new \an602\db\extractor\factory(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, $this);
    }

    /**
     * Gets the private 'dbal.tools' shared service.
     *
     * @return \an602\db\tools\tools_interface
     */
    protected function getDbal_ToolsService()
    {
        return $this->services['dbal.tools'] = ${($_ = isset($this->services['dbal.tools.factory']) ? $this->services['dbal.tools.factory'] : ($this->services['dbal.tools.factory'] = new \an602\db\tools\factory())) && false ?: '_'}->get(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'dbal.tools.factory' shared service.
     *
     * @return \an602\db\tools\factory
     */
    protected function getDbal_Tools_FactoryService()
    {
        return $this->services['dbal.tools.factory'] = new \an602\db\tools\factory();
    }

    /**
     * Gets the private 'dispatcher' shared service.
     *
     * @return \an602\event\dispatcher
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = new \an602\event\dispatcher($this);

        $instance->addListener('core.viewtopic_post_row_after', [0 => function () {
            return ${($_ = isset($this->services['an602.viglink.listener']) ? $this->services['an602.viglink.listener'] : $this->getPhpbb_Viglink_ListenerService()) && false ?: '_'};
        }, 1 => 'display_viglink'], 0);
        $instance->addListener('core.acp_main_notice', [0 => function () {
            return ${($_ = isset($this->services['an602.viglink.acp_listener']) ? $this->services['an602.viglink.acp_listener'] : $this->getPhpbb_Viglink_AcpListenerService()) && false ?: '_'};
        }, 1 => 'set_viglink_services'], 0);
        $instance->addListener('core.acp_help_an602_submit_before', [0 => function () {
            return ${($_ = isset($this->services['an602.viglink.acp_listener']) ? $this->services['an602.viglink.acp_listener'] : $this->getPhpbb_Viglink_AcpListenerService()) && false ?: '_'};
        }, 1 => 'update_viglink_settings'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['console.exception_subscriber']) ? $this->services['console.exception_subscriber'] : $this->getConsole_ExceptionSubscriberService()) && false ?: '_'};
        }, 1 => 'on_error'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['cron.event_listener']) ? $this->services['cron.event_listener'] : $this->getCron_EventListenerService()) && false ?: '_'};
        }, 1 => 'on_kernel_terminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['kernel_exception_subscriber']) ? $this->services['kernel_exception_subscriber'] : $this->getKernelExceptionSubscriberService()) && false ?: '_'};
        }, 1 => 'on_kernel_exception'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['kernel_terminate_subscriber']) ? $this->services['kernel_terminate_subscriber'] : ($this->services['kernel_terminate_subscriber'] = new \an602\event\kernel_terminate_subscriber())) && false ?: '_'};
        }, 1 => 'on_kernel_terminate'], -9223372036854775807-1);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['symfony_response_listener']) ? $this->services['symfony_response_listener'] : ($this->services['symfony_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['router.listener']) ? $this->services['router.listener'] : $this->getRouter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['router.listener']) ? $this->services['router.listener'] : $this->getRouter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['router.listener']) ? $this->services['router.listener'] : $this->getRouter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], -64);

        return $instance;
    }

    /**
     * Gets the private 'ext.manager' shared service.
     *
     * @return \an602\extension\manager
     */
    protected function getExt_ManagerService()
    {
        return $this->services['ext.manager'] = new \an602\extension\manager($this, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, 'an602_ext', './../', 'php', ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'});
    }

    /**
     * Gets the private 'feed.forum' service.
     *
     * @return \an602\feed\forum
     */
    protected function getFeed_ForumService()
    {
        return new \an602\feed\forum(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.forums' service.
     *
     * @return \an602\feed\forums
     */
    protected function getFeed_ForumsService()
    {
        return new \an602\feed\forums(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.helper' shared service.
     *
     * @return \an602\feed\helper
     */
    protected function getFeed_HelperService()
    {
        return $this->services['feed.helper'] = new \an602\feed\helper(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, $this, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['text_formatter.s9e.renderer']) ? $this->services['text_formatter.s9e.renderer'] : $this->getTextFormatter_S9e_RendererService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'feed.news' service.
     *
     * @return \an602\feed\news
     */
    protected function getFeed_NewsService()
    {
        return new \an602\feed\news(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.overall' service.
     *
     * @return \an602\feed\overall
     */
    protected function getFeed_OverallService()
    {
        return new \an602\feed\overall(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.quote_helper' shared service.
     *
     * @return \an602\feed\quote_helper
     */
    protected function getFeed_QuoteHelperService()
    {
        return $this->services['feed.quote_helper'] = new \an602\feed\quote_helper(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'feed.topic' service.
     *
     * @return \an602\feed\topic
     */
    protected function getFeed_TopicService()
    {
        return new \an602\feed\topic(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.topics' service.
     *
     * @return \an602\feed\topics
     */
    protected function getFeed_TopicsService()
    {
        return new \an602\feed\topics(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'feed.topics_active' service.
     *
     * @return \an602\feed\topics_active
     */
    protected function getFeed_TopicsActiveService()
    {
        return new \an602\feed\topics_active(${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['content.visibility']) ? $this->services['content.visibility'] : $this->getContent_VisibilityService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'file_downloader' shared service.
     *
     * @return \an602\file_downloader
     */
    protected function getFileDownloaderService()
    {
        return $this->services['file_downloader'] = new \an602\file_downloader();
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \an602\routing\file_locator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \an602\routing\file_locator(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, './../');
    }

    /**
     * Gets the private 'files.factory' shared service.
     *
     * @return \an602\files\factory
     */
    protected function getFiles_FactoryService()
    {
        return $this->services['files.factory'] = new \an602\files\factory($this);
    }

    /**
     * Gets the private 'files.filespec' service.
     *
     * @return \an602\files\filespec
     */
    protected function getFiles_FilespecService()
    {
        return new \an602\files\filespec(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['upload_imagesize']) ? $this->services['upload_imagesize'] : ($this->services['upload_imagesize'] = new \FastImageSize\FastImageSize())) && false ?: '_'}, './../', ${($_ = isset($this->services['mimetype.guesser']) ? $this->services['mimetype.guesser'] : $this->getMimetype_GuesserService()) && false ?: '_'}, ${($_ = isset($this->services['plupload']) ? $this->services['plupload'] : $this->getPluploadService()) && false ?: '_'});
    }

    /**
     * Gets the private 'files.types.form' service.
     *
     * @return \an602\files\types\form
     */
    protected function getFiles_Types_FormService()
    {
        return new \an602\files\types\form(${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \an602\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['plupload']) ? $this->services['plupload'] : $this->getPluploadService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'files.types.local' service.
     *
     * @return \an602\files\types\local
     */
    protected function getFiles_Types_LocalService()
    {
        return new \an602\files\types\local(${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \an602\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'files.types.remote' service.
     *
     * @return \an602\files\types\remote
     */
    protected function getFiles_Types_RemoteService()
    {
        return new \an602\files\types\remote(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \an602\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, './../');
    }

    /**
     * Gets the private 'files.upload' service.
     *
     * @return \an602\files\upload
     */
    protected function getFiles_UploadService()
    {
        return new \an602\files\upload(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['files.factory']) ? $this->services['files.factory'] : ($this->services['files.factory'] = new \an602\files\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'filesystem' shared service.
     *
     * @return \an602\filesystem\filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \an602\filesystem\filesystem();
    }

    /**
     * Gets the private 'group_helper' shared service.
     *
     * @return \an602\group\helper
     */
    protected function getGroupHelperService()
    {
        return $this->services['group_helper'] = new \an602\group\helper(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'groupposition.legend' shared service.
     *
     * @return \an602\groupposition\legend
     */
    protected function getGroupposition_LegendService()
    {
        return $this->services['groupposition.legend'] = new \an602\groupposition\legend(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'groupposition.teampage' shared service.
     *
     * @return \an602\groupposition\teampage
     */
    protected function getGroupposition_TeampageService()
    {
        return $this->services['groupposition.teampage'] = new \an602\groupposition\teampage(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});
    }

    /**
     * Gets the private 'hook_finder' shared service.
     *
     * @return \an602\hook\finder
     */
    protected function getHookFinderService()
    {
        return $this->services['hook_finder'] = new \an602\hook\finder('./../', 'php', ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'});
    }

    /**
     * Gets the private 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['controller.resolver']) ? $this->services['controller.resolver'] : $this->getController_ResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'kernel_exception_subscriber' shared service.
     *
     * @return \an602\event\kernel_exception_subscriber
     */
    protected function getKernelExceptionSubscriberService()
    {
        return $this->services['kernel_exception_subscriber'] = new \an602\event\kernel_exception_subscriber(${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, false);
    }

    /**
     * Gets the private 'kernel_terminate_subscriber' shared service.
     *
     * @return \an602\event\kernel_terminate_subscriber
     */
    protected function getKernelTerminateSubscriberService()
    {
        return $this->services['kernel_terminate_subscriber'] = new \an602\event\kernel_terminate_subscriber();
    }

    /**
     * Gets the private 'language' shared service.
     *
     * @return \an602\language\language
     */
    protected function getLanguageService()
    {
        return $this->services['language'] = new \an602\language\language(${($_ = isset($this->services['language.loader']) ? $this->services['language.loader'] : $this->getLanguage_LoaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'language.helper.language_file' shared service.
     *
     * @return \an602\language\language_file_helper
     */
    protected function getLanguage_Helper_LanguageFileService()
    {
        return $this->services['language.helper.language_file'] = new \an602\language\language_file_helper('./../');
    }

    /**
     * Gets the private 'language.loader' shared service.
     *
     * @return \an602\language\language_file_loader
     */
    protected function getLanguage_LoaderService()
    {
        $this->services['language.loader'] = $instance = new \an602\language\language_file_loader('./../', 'php');

        $instance->set_extension_manager(${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'log' shared service.
     *
     * @return \an602\log\log
     */
    protected function getLogService()
    {
        return $this->services['log'] = new \an602\log\log(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, './../', 'admin/', 'php', 'an602_log');
    }

    /**
     * Gets the private 'message.form.admin' shared service.
     *
     * @return \an602\message\admin_form
     */
    protected function getMessage_Form_AdminService()
    {
        return $this->services['message.form.admin'] = new \an602\message\admin_form(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'message.form.topic' shared service.
     *
     * @return \an602\message\topic_form
     */
    protected function getMessage_Form_TopicService()
    {
        return $this->services['message.form.topic'] = new \an602\message\topic_form(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'message.form.user' shared service.
     *
     * @return \an602\message\user_form
     */
    protected function getMessage_Form_UserService()
    {
        return $this->services['message.form.user'] = new \an602\message\user_form(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'migrator' shared service.
     *
     * @return \an602\db\migrator
     */
    protected function getMigratorService()
    {
        return $this->services['migrator'] = new \an602\db\migrator($this, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dbal.tools']) ? $this->services['dbal.tools'] : $this->getDbal_ToolsService()) && false ?: '_'}, 'an602_migrations', './../', 'php', 'an602_', ${($_ = isset($this->services['migrator.tool_collection']) ? $this->services['migrator.tool_collection'] : $this->getMigrator_ToolCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['migrator.helper']) ? $this->services['migrator.helper'] : ($this->services['migrator.helper'] = new \an602\db\migration\helper())) && false ?: '_'});
    }

    /**
     * Gets the private 'migrator.helper' shared service.
     *
     * @return \an602\db\migration\helper
     */
    protected function getMigrator_HelperService()
    {
        return $this->services['migrator.helper'] = new \an602\db\migration\helper();
    }

    /**
     * Gets the private 'migrator.tool.config' shared service.
     *
     * @return \an602\db\migration\tool\config
     */
    protected function getMigrator_Tool_ConfigService()
    {
        return $this->services['migrator.tool.config'] = new \an602\db\migration\tool\config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'migrator.tool.config_text' shared service.
     *
     * @return \an602\db\migration\tool\config_text
     */
    protected function getMigrator_Tool_ConfigTextService()
    {
        return $this->services['migrator.tool.config_text'] = new \an602\db\migration\tool\config_text(${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'});
    }

    /**
     * Gets the private 'migrator.tool.module' shared service.
     *
     * @return \an602\db\migration\tool\module
     */
    protected function getMigrator_Tool_ModuleService()
    {
        return $this->services['migrator.tool.module'] = new \an602\db\migration\tool\module(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['module.manager']) ? $this->services['module.manager'] : $this->getModule_ManagerService()) && false ?: '_'}, './../', 'php', 'an602_modules');
    }

    /**
     * Gets the private 'migrator.tool.permission' shared service.
     *
     * @return \an602\db\migration\tool\permission
     */
    protected function getMigrator_Tool_PermissionService()
    {
        return $this->services['migrator.tool.permission'] = new \an602\db\migration\tool\permission(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'migrator.tool_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getMigrator_ToolCollectionService()
    {
        $this->services['migrator.tool_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('migrator.tool.config');
        $instance->add('migrator.tool.config_text');
        $instance->add('migrator.tool.module');
        $instance->add('migrator.tool.permission');

        return $instance;
    }

    /**
     * Gets the private 'mimetype.content_guesser' shared service.
     *
     * @return \an602\mimetype\content_guesser
     */
    protected function getMimetype_ContentGuesserService()
    {
        $this->services['mimetype.content_guesser'] = $instance = new \an602\mimetype\content_guesser();

        $instance->set_priority(-1);

        return $instance;
    }

    /**
     * Gets the private 'mimetype.extension_guesser' shared service.
     *
     * @return \an602\mimetype\extension_guesser
     */
    protected function getMimetype_ExtensionGuesserService()
    {
        $this->services['mimetype.extension_guesser'] = $instance = new \an602\mimetype\extension_guesser();

        $instance->set_priority(-2);

        return $instance;
    }

    /**
     * Gets the private 'mimetype.filebinary_mimetype_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser
     */
    protected function getMimetype_FilebinaryMimetypeGuesserService()
    {
        return $this->services['mimetype.filebinary_mimetype_guesser'] = new \Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser();
    }

    /**
     * Gets the private 'mimetype.fileinfo_mimetype_guesser' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser
     */
    protected function getMimetype_FileinfoMimetypeGuesserService()
    {
        return $this->services['mimetype.fileinfo_mimetype_guesser'] = new \Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser();
    }

    /**
     * Gets the private 'mimetype.guesser' shared service.
     *
     * @return \an602\mimetype\guesser
     */
    protected function getMimetype_GuesserService()
    {
        return $this->services['mimetype.guesser'] = new \an602\mimetype\guesser(${($_ = isset($this->services['mimetype.guesser_collection']) ? $this->services['mimetype.guesser_collection'] : $this->getMimetype_GuesserCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'mimetype.guesser_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getMimetype_GuesserCollectionService()
    {
        $this->services['mimetype.guesser_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('mimetype.fileinfo_mimetype_guesser');
        $instance->add('mimetype.filebinary_mimetype_guesser');
        $instance->add('mimetype.content_guesser');
        $instance->add('mimetype.extension_guesser');

        return $instance;
    }

    /**
     * Gets the private 'module.manager' shared service.
     *
     * @return \an602\module\module_manager
     */
    protected function getModule_ManagerService()
    {
        return $this->services['module.manager'] = new \an602\module\module_manager(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, 'an602_modules', './../', 'php');
    }

    /**
     * Gets the private 'notification.method.board' service.
     *
     * @return \an602\notification\method\board
     */
    protected function getNotification_Method_BoardService()
    {
        return new \an602\notification\method\board(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, 'an602_notification_types', 'an602_notifications');
    }

    /**
     * Gets the private 'notification.method.email' service.
     *
     * @return \an602\notification\method\email
     */
    protected function getNotification_Method_EmailService()
    {
        return new \an602\notification\method\email(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, './../', 'php', 'an602_notification_emails');
    }

    /**
     * Gets the private 'notification.method.jabber' service.
     *
     * @return \an602\notification\method\jabber
     */
    protected function getNotification_Method_JabberService()
    {
        return new \an602\notification\method\jabber(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'notification.method_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getNotification_MethodCollectionService()
    {
        $this->services['notification.method_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('notification.method.board');
        $instance->add('notification.method.email');
        $instance->add('notification.method.jabber');

        return $instance;
    }

    /**
     * Gets the private 'notification.type.admin_activate_user' service.
     *
     * @return \an602\notification\type\admin_activate_user
     */
    protected function getNotification_Type_AdminActivateUserService()
    {
        $instance = new \an602\notification\type\admin_activate_user(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.approve_post' service.
     *
     * @return \an602\notification\type\approve_post
     */
    protected function getNotification_Type_ApprovePostService()
    {
        $instance = new \an602\notification\type\approve_post(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.approve_topic' service.
     *
     * @return \an602\notification\type\approve_topic
     */
    protected function getNotification_Type_ApproveTopicService()
    {
        $instance = new \an602\notification\type\approve_topic(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.bookmark' service.
     *
     * @return \an602\notification\type\bookmark
     */
    protected function getNotification_Type_BookmarkService()
    {
        $instance = new \an602\notification\type\bookmark(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.disapprove_post' service.
     *
     * @return \an602\notification\type\disapprove_post
     */
    protected function getNotification_Type_DisapprovePostService()
    {
        $instance = new \an602\notification\type\disapprove_post(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.disapprove_topic' service.
     *
     * @return \an602\notification\type\disapprove_topic
     */
    protected function getNotification_Type_DisapproveTopicService()
    {
        $instance = new \an602\notification\type\disapprove_topic(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.forum' service.
     *
     * @return \an602\notification\type\forum
     */
    protected function getNotification_Type_ForumService()
    {
        $instance = new \an602\notification\type\forum(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $a = ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'};

        $instance->set_user_loader($a);
        $instance->set_config($b);
        $instance->set_user_loader($a);
        $instance->set_config($b);

        return $instance;
    }

    /**
     * Gets the private 'notification.type.group_request' service.
     *
     * @return \an602\notification\type\group_request
     */
    protected function getNotification_Type_GroupRequestService()
    {
        $instance = new \an602\notification\type\group_request(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.group_request_approved' service.
     *
     * @return \an602\notification\type\group_request_approved
     */
    protected function getNotification_Type_GroupRequestApprovedService()
    {
        return new \an602\notification\type\group_request_approved(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');
    }

    /**
     * Gets the private 'notification.type.pm' service.
     *
     * @return \an602\notification\type\pm
     */
    protected function getNotification_Type_PmService()
    {
        $instance = new \an602\notification\type\pm(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.post' service.
     *
     * @return \an602\notification\type\post
     */
    protected function getNotification_Type_PostService()
    {
        $instance = new \an602\notification\type\post(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.post_in_queue' service.
     *
     * @return \an602\notification\type\post_in_queue
     */
    protected function getNotification_Type_PostInQueueService()
    {
        $instance = new \an602\notification\type\post_in_queue(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.quote' service.
     *
     * @return \an602\notification\type\quote
     */
    protected function getNotification_Type_QuoteService()
    {
        $instance = new \an602\notification\type\quote(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
        $instance->set_utils(${($_ = isset($this->services['text_formatter.s9e.utils']) ? $this->services['text_formatter.s9e.utils'] : ($this->services['text_formatter.s9e.utils'] = new \an602\textformatter\s9e\utils())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.report_pm' service.
     *
     * @return \an602\notification\type\report_pm
     */
    protected function getNotification_Type_ReportPmService()
    {
        $instance = new \an602\notification\type\report_pm(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.report_pm_closed' service.
     *
     * @return \an602\notification\type\report_pm_closed
     */
    protected function getNotification_Type_ReportPmClosedService()
    {
        $instance = new \an602\notification\type\report_pm_closed(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.report_post' service.
     *
     * @return \an602\notification\type\report_post
     */
    protected function getNotification_Type_ReportPostService()
    {
        $instance = new \an602\notification\type\report_post(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.report_post_closed' service.
     *
     * @return \an602\notification\type\report_post_closed
     */
    protected function getNotification_Type_ReportPostClosedService()
    {
        $instance = new \an602\notification\type\report_post_closed(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.topic' service.
     *
     * @return \an602\notification\type\topic
     */
    protected function getNotification_Type_TopicService()
    {
        $instance = new \an602\notification\type\topic(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type.topic_in_queue' service.
     *
     * @return \an602\notification\type\topic_in_queue
     */
    protected function getNotification_Type_TopicInQueueService()
    {
        $instance = new \an602\notification\type\topic_in_queue(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, './../', 'php', 'an602_user_notifications');

        $instance->set_user_loader(${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'});
        $instance->set_config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'notification.type_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getNotification_TypeCollectionService()
    {
        $this->services['notification.type_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('notification.type.admin_activate_user');
        $instance->add('notification.type.approve_post');
        $instance->add('notification.type.approve_topic');
        $instance->add('notification.type.bookmark');
        $instance->add('notification.type.disapprove_post');
        $instance->add('notification.type.disapprove_topic');
        $instance->add('notification.type.group_request');
        $instance->add('notification.type.group_request_approved');
        $instance->add('notification.type.pm');
        $instance->add('notification.type.post');
        $instance->add('notification.type.post_in_queue');
        $instance->add('notification.type.quote');
        $instance->add('notification.type.report_pm');
        $instance->add('notification.type.report_pm_closed');
        $instance->add('notification.type.report_post');
        $instance->add('notification.type.report_post_closed');
        $instance->add('notification.type.topic');
        $instance->add('notification.type.topic_in_queue');
        $instance->add('notification.type.forum');

        return $instance;
    }

    /**
     * Gets the private 'notification_manager' shared service.
     *
     * @return \an602\notification\manager
     */
    protected function getNotificationManagerService()
    {
        return $this->services['notification_manager'] = new \an602\notification\manager(${($_ = isset($this->services['notification.type_collection']) ? $this->services['notification.type_collection'] : $this->getNotification_TypeCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['notification.method_collection']) ? $this->services['notification.method_collection'] : $this->getNotification_MethodCollectionService()) && false ?: '_'}, $this, ${($_ = isset($this->services['user_loader']) ? $this->services['user_loader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'an602_notification_types', 'an602_user_notifications');
    }

    /**
     * Gets the private 'pagination' shared service.
     *
     * @return \an602\pagination
     */
    protected function getPaginationService()
    {
        return $this->services['pagination'] = new \an602\pagination(${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.argon2i' shared service.
     *
     * @return \an602\passwords\driver\argon2i
     */
    protected function getPasswords_Driver_Argon2iService()
    {
        return $this->services['passwords.driver.argon2i'] = new \an602\passwords\driver\argon2i(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, 65536, 2, 4);
    }

    /**
     * Gets the private 'passwords.driver.argon2id' shared service.
     *
     * @return \an602\passwords\driver\argon2id
     */
    protected function getPasswords_Driver_Argon2idService()
    {
        return $this->services['passwords.driver.argon2id'] = new \an602\passwords\driver\argon2id(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, 65536, 2, 4);
    }

    /**
     * Gets the private 'passwords.driver.bcrypt' shared service.
     *
     * @return \an602\passwords\driver\bcrypt
     */
    protected function getPasswords_Driver_BcryptService()
    {
        return $this->services['passwords.driver.bcrypt'] = new \an602\passwords\driver\bcrypt(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, 10);
    }

    /**
     * Gets the private 'passwords.driver.bcrypt_2y' shared service.
     *
     * @return \an602\passwords\driver\bcrypt_2y
     */
    protected function getPasswords_Driver_Bcrypt2yService()
    {
        return $this->services['passwords.driver.bcrypt_2y'] = new \an602\passwords\driver\bcrypt_2y(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, 10);
    }

    /**
     * Gets the private 'passwords.driver.bcrypt_wcf2' shared service.
     *
     * @return \an602\passwords\driver\bcrypt_wcf2
     */
    protected function getPasswords_Driver_BcryptWcf2Service()
    {
        return $this->services['passwords.driver.bcrypt_wcf2'] = new \an602\passwords\driver\bcrypt_wcf2(${($_ = isset($this->services['passwords.driver.bcrypt']) ? $this->services['passwords.driver.bcrypt'] : $this->getPasswords_Driver_BcryptService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.convert_password' shared service.
     *
     * @return \an602\passwords\driver\convert_password
     */
    protected function getPasswords_Driver_ConvertPasswordService()
    {
        return $this->services['passwords.driver.convert_password'] = new \an602\passwords\driver\convert_password(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.md5_mybb' shared service.
     *
     * @return \an602\passwords\driver\md5_mybb
     */
    protected function getPasswords_Driver_Md5MybbService()
    {
        return $this->services['passwords.driver.md5_mybb'] = new \an602\passwords\driver\md5_mybb(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.md5_phpbb2' shared service.
     *
     * @return \an602\passwords\driver\md5_phpbb2
     */
    protected function getPasswords_Driver_Md5Phpbb2Service()
    {
        return $this->services['passwords.driver.md5_phpbb2'] = new \an602\passwords\driver\md5_phpbb2(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver.salted_md5']) ? $this->services['passwords.driver.salted_md5'] : $this->getPasswords_Driver_SaltedMd5Service()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'passwords.driver.md5_vb' shared service.
     *
     * @return \an602\passwords\driver\md5_vb
     */
    protected function getPasswords_Driver_Md5VbService()
    {
        return $this->services['passwords.driver.md5_vb'] = new \an602\passwords\driver\md5_vb(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.phpass' shared service.
     *
     * @return \an602\passwords\driver\phpass
     */
    protected function getPasswords_Driver_PhpassService()
    {
        return $this->services['passwords.driver.phpass'] = new \an602\passwords\driver\phpass(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.salted_md5' shared service.
     *
     * @return \an602\passwords\driver\salted_md5
     */
    protected function getPasswords_Driver_SaltedMd5Service()
    {
        return $this->services['passwords.driver.salted_md5'] = new \an602\passwords\driver\salted_md5(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.sha1' shared service.
     *
     * @return \an602\passwords\driver\sha1
     */
    protected function getPasswords_Driver_Sha1Service()
    {
        return $this->services['passwords.driver.sha1'] = new \an602\passwords\driver\sha1(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.sha1_smf' shared service.
     *
     * @return \an602\passwords\driver\sha1_smf
     */
    protected function getPasswords_Driver_Sha1SmfService()
    {
        return $this->services['passwords.driver.sha1_smf'] = new \an602\passwords\driver\sha1_smf(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver.sha1_wcf1' shared service.
     *
     * @return \an602\passwords\driver\sha1_wcf1
     */
    protected function getPasswords_Driver_Sha1Wcf1Service()
    {
        return $this->services['passwords.driver.sha1_wcf1'] = new \an602\passwords\driver\sha1_wcf1(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_helper']) ? $this->services['passwords.driver_helper'] : $this->getPasswords_DriverHelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.driver_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getPasswords_DriverCollectionService()
    {
        $this->services['passwords.driver_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('passwords.driver.argon2i');
        $instance->add('passwords.driver.argon2id');
        $instance->add('passwords.driver.bcrypt');
        $instance->add('passwords.driver.bcrypt_2y');
        $instance->add('passwords.driver.bcrypt_wcf2');
        $instance->add('passwords.driver.salted_md5');
        $instance->add('passwords.driver.phpass');
        $instance->add('passwords.driver.convert_password');
        $instance->add('passwords.driver.sha1_smf');
        $instance->add('passwords.driver.sha1_wcf1');
        $instance->add('passwords.driver.sha1');
        $instance->add('passwords.driver.md5_phpbb2');
        $instance->add('passwords.driver.md5_mybb');
        $instance->add('passwords.driver.md5_vb');

        return $instance;
    }

    /**
     * Gets the private 'passwords.driver_helper' shared service.
     *
     * @return \an602\passwords\driver\helper
     */
    protected function getPasswords_DriverHelperService()
    {
        return $this->services['passwords.driver_helper'] = new \an602\passwords\driver\helper(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'passwords.helper' shared service.
     *
     * @return \an602\passwords\helper
     */
    protected function getPasswords_HelperService()
    {
        return $this->services['passwords.helper'] = new \an602\passwords\helper();
    }

    /**
     * Gets the private 'passwords.manager' shared service.
     *
     * @return \an602\passwords\manager
     */
    protected function getPasswords_ManagerService()
    {
        return $this->services['passwords.manager'] = new \an602\passwords\manager(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.driver_collection']) ? $this->services['passwords.driver_collection'] : $this->getPasswords_DriverCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.helper']) ? $this->services['passwords.helper'] : ($this->services['passwords.helper'] = new \an602\passwords\helper())) && false ?: '_'}, $this->parameters['passwords.algorithms']);
    }

    /**
     * Gets the private 'passwords.update.lock' shared service.
     *
     * @return \an602\lock\db
     */
    protected function getPasswords_Update_LockService()
    {
        return $this->services['passwords.update.lock'] = new \an602\lock\db('update_hashes_lock', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'path_helper' shared service.
     *
     * @return \an602\path_helper
     */
    protected function getPathHelperService()
    {
        return $this->services['path_helper'] = new \an602\path_helper(${($_ = isset($this->services['symfony_request']) ? $this->services['symfony_request'] : $this->getSymfonyRequestService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, './../', 'php', 'admin/');
    }

    /**
     * Gets the private 'php_ini' shared service.
     *
     * @return \bantu\IniGetWrapper\IniGetWrapper
     */
    protected function getPhpIniService()
    {
        return $this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper();
    }

    /**
     * Gets the private 'an602.feed.controller' shared service.
     *
     * @return \an602\feed\controller\feed
     */
    protected function getPhpbb_Feed_ControllerService()
    {
        return $this->services['an602.feed.controller'] = new \an602\feed\controller\feed(${($_ = isset($this->services['template.twig.environment']) ? $this->services['template.twig.environment'] : $this->getTemplate_Twig_EnvironmentService()) && false ?: '_'}, ${($_ = isset($this->services['symfony_request']) ? $this->services['symfony_request'] : $this->getSymfonyRequestService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, $this, ${($_ = isset($this->services['feed.helper']) ? $this->services['feed.helper'] : $this->getFeed_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, 'php');
    }

    /**
     * Gets the private 'an602.help.controller.bbcode' shared service.
     *
     * @return \an602\help\controller\bbcode
     */
    protected function getPhpbb_Help_Controller_BbcodeService()
    {
        return $this->services['an602.help.controller.bbcode'] = new \an602\help\controller\bbcode(${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['an602.help.manager']) ? $this->services['an602.help.manager'] : $this->getPhpbb_Help_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'an602.help.controller.faq' shared service.
     *
     * @return \an602\help\controller\faq
     */
    protected function getPhpbb_Help_Controller_FaqService()
    {
        return $this->services['an602.help.controller.faq'] = new \an602\help\controller\faq(${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['an602.help.manager']) ? $this->services['an602.help.manager'] : $this->getPhpbb_Help_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'an602.help.manager' shared service.
     *
     * @return \an602\help\manager
     */
    protected function getPhpbb_Help_ManagerService()
    {
        return $this->services['an602.help.manager'] = new \an602\help\manager(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'an602.report.controller' shared service.
     *
     * @return \an602\report\controller\report
     */
    protected function getPhpbb_Report_ControllerService()
    {
        return $this->services['an602.report.controller'] = new \an602\report\controller\report(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['captcha.factory']) ? $this->services['captcha.factory'] : $this->getCaptcha_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['an602.report.handler_factory']) ? $this->services['an602.report.handler_factory'] : ($this->services['an602.report.handler_factory'] = new \an602\report\handler_factory($this))) && false ?: '_'}, ${($_ = isset($this->services['an602.report.report_reason_list_provider']) ? $this->services['an602.report.report_reason_list_provider'] : $this->getPhpbb_Report_ReportReasonListProviderService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'an602.report.handler_factory' shared service.
     *
     * @return \an602\report\handler_factory
     */
    protected function getPhpbb_Report_HandlerFactoryService()
    {
        return $this->services['an602.report.handler_factory'] = new \an602\report\handler_factory($this);
    }

    /**
     * Gets the private 'an602.report.handlers.report_handler_pm' service.
     *
     * @return \an602\report\report_handler_pm
     */
    protected function getPhpbb_Report_Handlers_ReportHandlerPmService()
    {
        return new \an602\report\report_handler_pm(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'an602.report.handlers.report_handler_post' service.
     *
     * @return \an602\report\report_handler_post
     */
    protected function getPhpbb_Report_Handlers_ReportHandlerPostService()
    {
        return new \an602\report\report_handler_post(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['notification_manager']) ? $this->services['notification_manager'] : $this->getNotificationManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'an602.report.report_reason_list_provider' shared service.
     *
     * @return \an602\report\report_reason_list_provider
     */
    protected function getPhpbb_Report_ReportReasonListProviderService()
    {
        return $this->services['an602.report.report_reason_list_provider'] = new \an602\report\report_reason_list_provider(${($_ = isset($this->services['dbal.conn.driver']) ? $this->services['dbal.conn.driver'] : $this->get('dbal.conn.driver', 1)) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'an602.ucp.controller.reset_password' shared service.
     *
     * @return \an602\ucp\controller\reset_password
     */
    protected function getPhpbb_Ucp_Controller_ResetPasswordService()
    {
        return $this->services['an602.ucp.controller.reset_password'] = new \an602\ucp\controller\reset_password(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['controller.helper']) ? $this->services['controller.helper'] : $this->getController_HelperService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['passwords.manager']) ? $this->services['passwords.manager'] : $this->getPasswords_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'an602_users', './../', 'php');
    }

    /**
     * Gets the private 'an602.viglink.acp_listener' shared service.
     *
     * @return \an602\viglink\event\acp_listener
     */
    protected function getPhpbb_Viglink_AcpListenerService()
    {
        return $this->services['an602.viglink.acp_listener'] = new \an602\viglink\event\acp_listener(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['an602.viglink.helper']) ? $this->services['an602.viglink.helper'] : $this->getPhpbb_Viglink_HelperService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'an602.viglink.cron.task.viglink' shared service.
     *
     * @return \an602\viglink\cron\viglink
     */
    protected function getPhpbb_Viglink_Cron_Task_ViglinkService()
    {
        $this->services['an602.viglink.cron.task.viglink'] = $instance = new \an602\viglink\cron\viglink(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['an602.viglink.helper']) ? $this->services['an602.viglink.helper'] : $this->getPhpbb_Viglink_HelperService()) && false ?: '_'});

        $instance->set_name('cron.task.viglink');

        return $instance;
    }

    /**
     * Gets the private 'an602.viglink.helper' shared service.
     *
     * @return \an602\viglink\acp\viglink_helper
     */
    protected function getPhpbb_Viglink_HelperService()
    {
        return $this->services['an602.viglink.helper'] = new \an602\viglink\acp\viglink_helper(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['file_downloader']) ? $this->services['file_downloader'] : ($this->services['file_downloader'] = new \an602\file_downloader())) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'an602.viglink.listener' shared service.
     *
     * @return \an602\viglink\event\listener
     */
    protected function getPhpbb_Viglink_ListenerService()
    {
        return $this->services['an602.viglink.listener'] = new \an602\viglink\event\listener(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'});
    }

    /**
     * Gets the private 'plupload' shared service.
     *
     * @return \an602\plupload\plupload
     */
    protected function getPluploadService()
    {
        return $this->services['plupload'] = new \an602\plupload\plupload('./../', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['php_ini']) ? $this->services['php_ini'] : ($this->services['php_ini'] = new \bantu\IniGetWrapper\IniGetWrapper())) && false ?: '_'}, ${($_ = isset($this->services['mimetype.guesser']) ? $this->services['mimetype.guesser'] : $this->getMimetype_GuesserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.lang_helper' shared service.
     *
     * @return \an602\profilefields\lang_helper
     */
    protected function getProfilefields_LangHelperService()
    {
        return $this->services['profilefields.lang_helper'] = new \an602\profilefields\lang_helper(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_profile_fields_lang');
    }

    /**
     * Gets the private 'profilefields.manager' shared service.
     *
     * @return \an602\profilefields\manager
     */
    protected function getProfilefields_ManagerService()
    {
        return $this->services['profilefields.manager'] = new \an602\profilefields\manager(${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, ${($_ = isset($this->services['dbal.tools']) ? $this->services['dbal.tools'] : $this->getDbal_ToolsService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['profilefields.type_collection']) ? $this->services['profilefields.type_collection'] : $this->getProfilefields_TypeCollectionService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, 'an602_profile_fields', 'an602_profile_fields_data', 'an602_profile_fields_lang', 'an602_profile_lang');
    }

    /**
     * Gets the private 'profilefields.type.bool' shared service.
     *
     * @return \an602\profilefields\type\type_bool
     */
    protected function getProfilefields_Type_BoolService()
    {
        return $this->services['profilefields.type.bool'] = new \an602\profilefields\type\type_bool(${($_ = isset($this->services['profilefields.lang_helper']) ? $this->services['profilefields.lang_helper'] : $this->getProfilefields_LangHelperService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.date' shared service.
     *
     * @return \an602\profilefields\type\type_date
     */
    protected function getProfilefields_Type_DateService()
    {
        return $this->services['profilefields.type.date'] = new \an602\profilefields\type\type_date(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.dropdown' shared service.
     *
     * @return \an602\profilefields\type\type_dropdown
     */
    protected function getProfilefields_Type_DropdownService()
    {
        return $this->services['profilefields.type.dropdown'] = new \an602\profilefields\type\type_dropdown(${($_ = isset($this->services['profilefields.lang_helper']) ? $this->services['profilefields.lang_helper'] : $this->getProfilefields_LangHelperService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.int' shared service.
     *
     * @return \an602\profilefields\type\type_int
     */
    protected function getProfilefields_Type_IntService()
    {
        return $this->services['profilefields.type.int'] = new \an602\profilefields\type\type_int(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.string' shared service.
     *
     * @return \an602\profilefields\type\type_string
     */
    protected function getProfilefields_Type_StringService()
    {
        return $this->services['profilefields.type.string'] = new \an602\profilefields\type\type_string(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.text' shared service.
     *
     * @return \an602\profilefields\type\type_text
     */
    protected function getProfilefields_Type_TextService()
    {
        return $this->services['profilefields.type.text'] = new \an602\profilefields\type\type_text(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type.url' shared service.
     *
     * @return \an602\profilefields\type\type_url
     */
    protected function getProfilefields_Type_UrlService()
    {
        return $this->services['profilefields.type.url'] = new \an602\profilefields\type\type_url(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['template']) ? $this->services['template'] : $this->getTemplateService()) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'profilefields.type_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getProfilefields_TypeCollectionService()
    {
        $this->services['profilefields.type_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('profilefields.type.bool');
        $instance->add('profilefields.type.date');
        $instance->add('profilefields.type.dropdown');
        $instance->add('profilefields.type.int');
        $instance->add('profilefields.type.string');
        $instance->add('profilefields.type.text');
        $instance->add('profilefields.type.url');

        return $instance;
    }

    /**
     * Gets the private 'request' shared service.
     *
     * @return \an602\request\request
     */
    protected function getRequestService()
    {
        return $this->services['request'] = new \an602\request\request(NULL, true);
    }

    /**
     * Gets the private 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the private 'router' shared service.
     *
     * @return \an602\routing\router
     */
    protected function getRouterService()
    {
        return $this->services['router'] = new \an602\routing\router($this, ${($_ = isset($this->services['routing.chained_resources_locator']) ? $this->services['routing.chained_resources_locator'] : $this->getRouting_ChainedResourcesLocatorService()) && false ?: '_'}, ${($_ = isset($this->services['routing.delegated_loader']) ? $this->services['routing.delegated_loader'] : $this->getRouting_DelegatedLoaderService()) && false ?: '_'}, 'php', './../cache/production/');
    }

    /**
     * Gets the private 'router.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouter_ListenerService()
    {
        return $this->services['router.listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.chained_resources_locator' shared service.
     *
     * @return \an602\routing\resources_locator\chained_resources_locator
     */
    protected function getRouting_ChainedResourcesLocatorService()
    {
        return $this->services['routing.chained_resources_locator'] = new \an602\routing\resources_locator\chained_resources_locator(${($_ = isset($this->services['routing.resources_locator.collection']) ? $this->services['routing.resources_locator.collection'] : $this->getRouting_ResourcesLocator_CollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.delegated_loader' shared service.
     *
     * @return \Symfony\Component\Config\Loader\DelegatingLoader
     */
    protected function getRouting_DelegatedLoaderService()
    {
        return $this->services['routing.delegated_loader'] = new \Symfony\Component\Config\Loader\DelegatingLoader(${($_ = isset($this->services['routing.resolver']) ? $this->services['routing.resolver'] : $this->getRouting_ResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.helper' shared service.
     *
     * @return \an602\routing\helper
     */
    protected function getRouting_HelperService()
    {
        return $this->services['routing.helper'] = new \an602\routing\helper(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['symfony_request']) ? $this->services['symfony_request'] : $this->getSymfonyRequestService()) && false ?: '_'}, ${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'routing.loader.collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getRouting_Loader_CollectionService()
    {
        $this->services['routing.loader.collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('routing.loader.yaml');

        return $instance;
    }

    /**
     * Gets the private 'routing.loader.yaml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YamlService()
    {
        return $this->services['routing.loader.yaml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->getFileLocatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \an602\routing\loader_resolver
     */
    protected function getRouting_ResolverService()
    {
        return $this->services['routing.resolver'] = new \an602\routing\loader_resolver(${($_ = isset($this->services['routing.loader.collection']) ? $this->services['routing.loader.collection'] : $this->getRouting_Loader_CollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'routing.resources_locator.collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getRouting_ResourcesLocator_CollectionService()
    {
        $this->services['routing.resources_locator.collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('routing.resources_locator.default');

        return $instance;
    }

    /**
     * Gets the private 'routing.resources_locator.default' shared service.
     *
     * @return \an602\routing\resources_locator\default_resources_locator
     */
    protected function getRouting_ResourcesLocator_DefaultService()
    {
        return $this->services['routing.resources_locator.default'] = new \an602\routing\resources_locator\default_resources_locator('./../', 'production', ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'symfony_request' shared service.
     *
     * @return \an602\symfony_request
     */
    protected function getSymfonyRequestService()
    {
        return $this->services['symfony_request'] = new \an602\symfony_request(${($_ = isset($this->services['request']) ? $this->services['request'] : ($this->services['request'] = new \an602\request\request(NULL, true))) && false ?: '_'});
    }

    /**
     * Gets the private 'symfony_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getSymfonyResponseListenerService()
    {
        return $this->services['symfony_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'template' shared service.
     *
     * @return \an602\template\twig\twig
     */
    protected function getTemplateService()
    {
        return $this->services['template'] = new \an602\template\twig\twig(${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['template_context']) ? $this->services['template_context'] : ($this->services['template_context'] = new \an602\template\context())) && false ?: '_'}, ${($_ = isset($this->services['template.twig.environment']) ? $this->services['template.twig.environment'] : $this->getTemplate_Twig_EnvironmentService()) && false ?: '_'}, './../cache/production/twig/', ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, ${($_ = isset($this->services['template.twig.extensions.collection']) ? $this->services['template.twig.extensions.collection'] : $this->getTemplate_Twig_Extensions_CollectionService()) && false ?: '_'}, ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.environment' shared service.
     *
     * @return \an602\template\twig\environment
     */
    protected function getTemplate_Twig_EnvironmentService()
    {
        $this->services['template.twig.environment'] = $instance = new \an602\template\twig\environment(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'}, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'}, './../cache/production/twig/', ${($_ = isset($this->services['ext.manager']) ? $this->services['ext.manager'] : $this->getExt_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['template.twig.loader']) ? $this->services['template.twig.loader'] : $this->getTemplate_Twig_LoaderService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, []);

        $instance->setLexer(${($_ = isset($this->services['template.twig.lexer']) ? $this->services['template.twig.lexer'] : $this->getTemplate_Twig_LexerService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'template.twig.extensions.avatar' shared service.
     *
     * @return \an602\template\twig\extension\avatar
     */
    protected function getTemplate_Twig_Extensions_AvatarService()
    {
        return $this->services['template.twig.extensions.avatar'] = new \an602\template\twig\extension\avatar();
    }

    /**
     * Gets the private 'template.twig.extensions.collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getTemplate_Twig_Extensions_CollectionService()
    {
        $this->services['template.twig.extensions.collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('template.twig.extensions.phpbb');
        $instance->add('template.twig.extensions.avatar');
        $instance->add('template.twig.extensions.config');
        $instance->add('template.twig.extensions.routing');
        $instance->add('template.twig.extensions.username');

        return $instance;
    }

    /**
     * Gets the private 'template.twig.extensions.config' shared service.
     *
     * @return \an602\template\twig\extension\config
     */
    protected function getTemplate_Twig_Extensions_ConfigService()
    {
        return $this->services['template.twig.extensions.config'] = new \an602\template\twig\extension\config(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.extensions.debug' shared service.
     *
     * @return \Twig\Extension\DebugExtension
     */
    protected function getTemplate_Twig_Extensions_DebugService()
    {
        return $this->services['template.twig.extensions.debug'] = new \Twig\Extension\DebugExtension();
    }

    /**
     * Gets the private 'template.twig.extensions.phpbb' shared service.
     *
     * @return \an602\template\twig\extension
     */
    protected function getTemplate_Twig_Extensions_PhpbbService()
    {
        return $this->services['template.twig.extensions.phpbb'] = new \an602\template\twig\extension(${($_ = isset($this->services['template_context']) ? $this->services['template_context'] : ($this->services['template_context'] = new \an602\template\context())) && false ?: '_'}, ${($_ = isset($this->services['template.twig.environment']) ? $this->services['template.twig.environment'] : $this->getTemplate_Twig_EnvironmentService()) && false ?: '_'}, ${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.extensions.routing' shared service.
     *
     * @return \an602\template\twig\extension\routing
     */
    protected function getTemplate_Twig_Extensions_RoutingService()
    {
        return $this->services['template.twig.extensions.routing'] = new \an602\template\twig\extension\routing(${($_ = isset($this->services['routing.helper']) ? $this->services['routing.helper'] : $this->getRouting_HelperService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.extensions.username' shared service.
     *
     * @return \an602\template\twig\extension\username
     */
    protected function getTemplate_Twig_Extensions_UsernameService()
    {
        return $this->services['template.twig.extensions.username'] = new \an602\template\twig\extension\username();
    }

    /**
     * Gets the private 'template.twig.lexer' shared service.
     *
     * @return \an602\template\twig\lexer
     */
    protected function getTemplate_Twig_LexerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['template.twig.lexer'] = $this->createProxy('lexer_6d586c2', function () {
                return \lexer_6d586c2::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getTemplate_Twig_LexerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \an602\template\twig\lexer(${($_ = isset($this->services['template.twig.environment']) ? $this->services['template.twig.environment'] : $this->getTemplate_Twig_EnvironmentService()) && false ?: '_'});
    }

    /**
     * Gets the private 'template.twig.loader' shared service.
     *
     * @return \an602\template\twig\loader
     */
    protected function getTemplate_Twig_LoaderService()
    {
        return $this->services['template.twig.loader'] = new \an602\template\twig\loader(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'});
    }

    /**
     * Gets the private 'template_context' shared service.
     *
     * @return \an602\template\context
     */
    protected function getTemplateContextService()
    {
        return $this->services['template_context'] = new \an602\template\context();
    }

    /**
     * Gets the private 'text_formatter.acp_utils' shared service.
     *
     * @return \an602\textformatter\s9e\acp_utils
     */
    protected function getTextFormatter_AcpUtilsService()
    {
        return $this->services['text_formatter.acp_utils'] = new \an602\textformatter\s9e\acp_utils(${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'text_formatter.data_access' shared service.
     *
     * @return \an602\textformatter\data_access
     */
    protected function getTextFormatter_DataAccessService()
    {
        return $this->services['text_formatter.data_access'] = new \an602\textformatter\data_access(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_bbcodes', 'an602_smilies', 'an602_styles', 'an602_words', './../styles/');
    }

    /**
     * Gets the private 'text_formatter.s9e.bbcode_merger' shared service.
     *
     * @return \an602\textformatter\s9e\bbcode_merger
     */
    protected function getTextFormatter_S9e_BbcodeMergerService()
    {
        return $this->services['text_formatter.s9e.bbcode_merger'] = new \an602\textformatter\s9e\bbcode_merger(${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'text_formatter.s9e.factory' shared service.
     *
     * @return \an602\textformatter\s9e\factory
     */
    protected function getTextFormatter_S9e_FactoryService()
    {
        return $this->services['text_formatter.s9e.factory'] = new \an602\textformatter\s9e\factory(${($_ = isset($this->services['text_formatter.data_access']) ? $this->services['text_formatter.data_access'] : $this->getTextFormatter_DataAccessService()) && false ?: '_'}, ${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['text_formatter.s9e.link_helper']) ? $this->services['text_formatter.s9e.link_helper'] : ($this->services['text_formatter.s9e.link_helper'] = new \an602\textformatter\s9e\link_helper())) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->getLogService()) && false ?: '_'}, './../cache/production/', '_text_formatter_parser', '_text_formatter_renderer');
    }

    /**
     * Gets the private 'text_formatter.s9e.link_helper' shared service.
     *
     * @return \an602\textformatter\s9e\link_helper
     */
    protected function getTextFormatter_S9e_LinkHelperService()
    {
        return $this->services['text_formatter.s9e.link_helper'] = new \an602\textformatter\s9e\link_helper();
    }

    /**
     * Gets the private 'text_formatter.s9e.parser' shared service.
     *
     * @return \an602\textformatter\s9e\parser
     */
    protected function getTextFormatter_S9e_ParserService()
    {
        return $this->services['text_formatter.s9e.parser'] = new \an602\textformatter\s9e\parser(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, '_text_formatter_parser', ${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'});
    }

    /**
     * Gets the private 'text_formatter.s9e.quote_helper' shared service.
     *
     * @return \an602\textformatter\s9e\quote_helper
     */
    protected function getTextFormatter_S9e_QuoteHelperService()
    {
        return $this->services['text_formatter.s9e.quote_helper'] = new \an602\textformatter\s9e\quote_helper(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, './../', 'php');
    }

    /**
     * Gets the private 'text_formatter.s9e.renderer' shared service.
     *
     * @return \an602\textformatter\s9e\renderer
     */
    protected function getTextFormatter_S9e_RendererService()
    {
        $this->services['text_formatter.s9e.renderer'] = $instance = new \an602\textformatter\s9e\renderer(${($_ = isset($this->services['cache.driver']) ? $this->services['cache.driver'] : ($this->services['cache.driver'] = new \an602\cache\driver\file())) && false ?: '_'}, './../cache/production/', '_text_formatter_renderer', ${($_ = isset($this->services['text_formatter.s9e.factory']) ? $this->services['text_formatter.s9e.factory'] : $this->getTextFormatter_S9e_FactoryService()) && false ?: '_'}, ${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'});

        $a = ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'};

        $instance->configure_quote_helper(${($_ = isset($this->services['text_formatter.s9e.quote_helper']) ? $this->services['text_formatter.s9e.quote_helper'] : $this->getTextFormatter_S9e_QuoteHelperService()) && false ?: '_'});
        $instance->configure_smilies_path($a, ${($_ = isset($this->services['path_helper']) ? $this->services['path_helper'] : $this->getPathHelperService()) && false ?: '_'});
        $instance->configure_user(${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'}, $a, ${($_ = isset($this->services['auth']) ? $this->services['auth'] : ($this->services['auth'] = new \an602\auth\auth())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'text_formatter.s9e.utils' shared service.
     *
     * @return \an602\textformatter\s9e\utils
     */
    protected function getTextFormatter_S9e_UtilsService()
    {
        return $this->services['text_formatter.s9e.utils'] = new \an602\textformatter\s9e\utils();
    }

    /**
     * Gets the private 'text_reparser.contact_admin_info' shared service.
     *
     * @return \an602\textreparser\plugins\contact_admin_info
     */
    protected function getTextReparser_ContactAdminInfoService()
    {
        $this->services['text_reparser.contact_admin_info'] = $instance = new \an602\textreparser\plugins\contact_admin_info(${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'});

        $instance->set_name('contact_admin_info');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.forum_description' shared service.
     *
     * @return \an602\textreparser\plugins\forum_description
     */
    protected function getTextReparser_ForumDescriptionService()
    {
        $this->services['text_reparser.forum_description'] = $instance = new \an602\textreparser\plugins\forum_description(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_forums');

        $instance->set_name('forum_description');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.forum_rules' shared service.
     *
     * @return \an602\textreparser\plugins\forum_rules
     */
    protected function getTextReparser_ForumRulesService()
    {
        $this->services['text_reparser.forum_rules'] = $instance = new \an602\textreparser\plugins\forum_rules(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_forums');

        $instance->set_name('forum_rules');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.group_description' shared service.
     *
     * @return \an602\textreparser\plugins\group_description
     */
    protected function getTextReparser_GroupDescriptionService()
    {
        $this->services['text_reparser.group_description'] = $instance = new \an602\textreparser\plugins\group_description(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_groups');

        $instance->set_name('group_description');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.lock' shared service.
     *
     * @return \an602\lock\db
     */
    protected function getTextReparser_LockService()
    {
        return $this->services['text_reparser.lock'] = new \an602\lock\db('reparse_lock', ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'});
    }

    /**
     * Gets the private 'text_reparser.manager' shared service.
     *
     * @return \an602\textreparser\manager
     */
    protected function getTextReparser_ManagerService()
    {
        return $this->services['text_reparser.manager'] = new \an602\textreparser\manager(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['config_text']) ? $this->services['config_text'] : $this->getConfigTextService()) && false ?: '_'}, ${($_ = isset($this->services['text_reparser_collection']) ? $this->services['text_reparser_collection'] : $this->getTextReparserCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'text_reparser.pm_text' shared service.
     *
     * @return \an602\textreparser\plugins\pm_text
     */
    protected function getTextReparser_PmTextService()
    {
        $this->services['text_reparser.pm_text'] = $instance = new \an602\textreparser\plugins\pm_text(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_privmsgs');

        $instance->set_name('pm_text');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.poll_option' shared service.
     *
     * @return \an602\textreparser\plugins\poll_option
     */
    protected function getTextReparser_PollOptionService()
    {
        $this->services['text_reparser.poll_option'] = $instance = new \an602\textreparser\plugins\poll_option(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_poll_options');

        $instance->set_name('poll_option');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.poll_title' shared service.
     *
     * @return \an602\textreparser\plugins\poll_title
     */
    protected function getTextReparser_PollTitleService()
    {
        $this->services['text_reparser.poll_title'] = $instance = new \an602\textreparser\plugins\poll_title(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_topics');

        $instance->set_name('poll_title');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.post_text' shared service.
     *
     * @return \an602\textreparser\plugins\post_text
     */
    protected function getTextReparser_PostTextService()
    {
        $this->services['text_reparser.post_text'] = $instance = new \an602\textreparser\plugins\post_text(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_posts');

        $instance->set_name('post_text');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser.user_signature' shared service.
     *
     * @return \an602\textreparser\plugins\user_signature
     */
    protected function getTextReparser_UserSignatureService()
    {
        $this->services['text_reparser.user_signature'] = $instance = new \an602\textreparser\plugins\user_signature(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, 'an602_users');

        $instance->set_name('user_signature');

        return $instance;
    }

    /**
     * Gets the private 'text_reparser_collection' shared service.
     *
     * @return \an602\di\service_collection
     */
    protected function getTextReparserCollectionService()
    {
        $this->services['text_reparser_collection'] = $instance = new \an602\di\service_collection($this);

        $instance->add('text_reparser.contact_admin_info');
        $instance->add('text_reparser.forum_description');
        $instance->add('text_reparser.forum_rules');
        $instance->add('text_reparser.group_description');
        $instance->add('text_reparser.pm_text');
        $instance->add('text_reparser.poll_option');
        $instance->add('text_reparser.poll_title');
        $instance->add('text_reparser.post_text');
        $instance->add('text_reparser.user_signature');

        return $instance;
    }

    /**
     * Gets the private 'upload_imagesize' shared service.
     *
     * @return \FastImageSize\FastImageSize
     */
    protected function getUploadImagesizeService()
    {
        return $this->services['upload_imagesize'] = new \FastImageSize\FastImageSize();
    }

    /**
     * Gets the private 'user' shared service.
     *
     * @return \an602\user
     */
    protected function getUserService()
    {
        return $this->services['user'] = new \an602\user(${($_ = isset($this->services['language']) ? $this->services['language'] : $this->getLanguageService()) && false ?: '_'}, '\\an602\\datetime');
    }

    /**
     * Gets the private 'user_loader' shared service.
     *
     * @return \an602\user_loader
     */
    protected function getUserLoaderService()
    {
        return $this->services['user_loader'] = new \an602\user_loader(${($_ = isset($this->services['dbal.conn']) ? $this->services['dbal.conn'] : ($this->services['dbal.conn'] = new \an602\db\driver\factory($this))) && false ?: '_'}, './../', 'php', 'an602_users');
    }

    /**
     * Gets the private 'version_helper' service.
     *
     * @return \an602\version_helper
     */
    protected function getVersionHelperService()
    {
        return new \an602\version_helper(${($_ = isset($this->services['cache']) ? $this->services['cache'] : $this->getCacheService()) && false ?: '_'}, ${($_ = isset($this->services['config']) ? $this->services['config'] : $this->getConfigService()) && false ?: '_'}, ${($_ = isset($this->services['file_downloader']) ? $this->services['file_downloader'] : ($this->services['file_downloader'] = new \an602\file_downloader())) && false ?: '_'}, ${($_ = isset($this->services['user']) ? $this->services['user'] : $this->getUserService()) && false ?: '_'});
    }

    /**
     * Gets the private 'viewonline_helper' shared service.
     *
     * @return \an602\viewonline_helper
     */
    protected function getViewonlineHelperService()
    {
        return $this->services['viewonline_helper'] = new \an602\viewonline_helper(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \an602\filesystem\filesystem())) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'core.root_path' => './../',
            'core.php_ext' => 'php',
            'core.environment' => 'production',
            'core.debug' => false,
            'core.cache_dir' => './../cache/production/',
            'passwords.driver.argon2_memory_cost' => 65536,
            'passwords.driver.argon2_threads' => 2,
            'passwords.driver.argon2_time_cost' => 4,
            'passwords.driver.bcrypt_cost' => 10,
            'text_formatter.cache.dir' => './../cache/production/',
            'text_formatter.cache.parser.key' => '_text_formatter_parser',
            'text_formatter.cache.renderer.key' => '_text_formatter_renderer',
            'core.template.cache_path' => './../cache/production/twig/',
            'tables.acl_groups' => 'an602_acl_groups',
            'tables.acl_options' => 'an602_acl_options',
            'tables.acl_roles' => 'an602_acl_roles',
            'tables.acl_roles_data' => 'an602_acl_roles_data',
            'tables.acl_users' => 'an602_acl_users',
            'tables.attachments' => 'an602_attachments',
            'tables.auth_provider_oauth_token_storage' => 'an602_oauth_tokens',
            'tables.auth_provider_oauth_states' => 'an602_oauth_states',
            'tables.auth_provider_oauth_account_assoc' => 'an602_oauth_accounts',
            'tables.banlist' => 'an602_banlist',
            'tables.bbcodes' => 'an602_bbcodes',
            'tables.bookmarks' => 'an602_bookmarks',
            'tables.bots' => 'an602_bots',
            'tables.captcha_qa_questions' => 'an602_captcha_questions',
            'tables.captcha_qa_answers' => 'an602_captcha_answers',
            'tables.captcha_qa_confirm' => 'an602_qa_confirm',
            'tables.config' => 'an602_config',
            'tables.config_text' => 'an602_config_text',
            'tables.confirm' => 'an602_confirm',
            'tables.disallow' => 'an602_disallow',
            'tables.drafts' => 'an602_drafts',
            'tables.ext' => 'an602_ext',
            'tables.extensions' => 'an602_extensions',
            'tables.extension_groups' => 'an602_extension_groups',
            'tables.forums' => 'an602_forums',
            'tables.forums_access' => 'an602_forums_access',
            'tables.forums_track' => 'an602_forums_track',
            'tables.forums_watch' => 'an602_forums_watch',
            'tables.groups' => 'an602_groups',
            'tables.icons' => 'an602_icons',
            'tables.lang' => 'an602_lang',
            'tables.log' => 'an602_log',
            'tables.login_attempts' => 'an602_login_attempts',
            'tables.migrations' => 'an602_migrations',
            'tables.moderator_cache' => 'an602_moderator_cache',
            'tables.modules' => 'an602_modules',
            'tables.notification_emails' => 'an602_notification_emails',
            'tables.notification_types' => 'an602_notification_types',
            'tables.notifications' => 'an602_notifications',
            'tables.poll_options' => 'an602_poll_options',
            'tables.poll_votes' => 'an602_poll_votes',
            'tables.posts' => 'an602_posts',
            'tables.privmsgs' => 'an602_privmsgs',
            'tables.privmsgs_folder' => 'an602_privmsgs_folder',
            'tables.privmsgs_rules' => 'an602_privmsgs_rules',
            'tables.privmsgs_to' => 'an602_privmsgs_to',
            'tables.profile_fields' => 'an602_profile_fields',
            'tables.profile_fields_data' => 'an602_profile_fields_data',
            'tables.profile_fields_options_language' => 'an602_profile_fields_lang',
            'tables.profile_fields_language' => 'an602_profile_lang',
            'tables.ranks' => 'an602_ranks',
            'tables.reports' => 'an602_reports',
            'tables.reports_reasons' => 'an602_reports_reasons',
            'tables.search_results' => 'an602_search_results',
            'tables.search_wordlist' => 'an602_search_wordlist',
            'tables.search_wordmatch' => 'an602_search_wordmatch',
            'tables.sessions' => 'an602_sessions',
            'tables.sessions_keys' => 'an602_sessions_keys',
            'tables.sitelist' => 'an602_sitelist',
            'tables.smilies' => 'an602_smilies',
            'tables.sphinx' => 'an602_sphinx',
            'tables.styles' => 'an602_styles',
            'tables.styles_template' => 'an602_styles_template',
            'tables.styles_template_data' => 'an602_styles_template_data',
            'tables.styles_theme' => 'an602_styles_theme',
            'tables.styles_imageset' => 'an602_styles_imageset',
            'tables.styles_imageset_data' => 'an602_styles_imageset_data',
            'tables.teampage' => 'an602_teampage',
            'tables.topics' => 'an602_topics',
            'tables.topics_posted' => 'an602_topics_posted',
            'tables.topics_track' => 'an602_topics_track',
            'tables.topics_watch' => 'an602_topics_watch',
            'tables.user_group' => 'an602_user_group',
            'tables.user_notifications' => 'an602_user_notifications',
            'tables.users' => 'an602_users',
            'tables.warnings' => 'an602_warnings',
            'tables.words' => 'an602_words',
            'tables.zebra' => 'an602_zebra',
            'core.disable_super_globals' => true,
            'datetime.class' => '\\an602\\datetime',
            'mimetype.guesser.priority.lowest' => -2,
            'mimetype.guesser.priority.low' => -1,
            'mimetype.guesser.priority.default' => 0,
            'mimetype.guesser.priority.high' => 1,
            'mimetype.guesser.priority.highest' => 2,
            'passwords.algorithms' => [
                0 => 'passwords.driver.argon2id',
                1 => 'passwords.driver.argon2i',
                2 => 'passwords.driver.bcrypt_2y',
                3 => 'passwords.driver.bcrypt',
                4 => 'passwords.driver.salted_md5',
                5 => 'passwords.driver.phpass',
            ],
            'allow_install_dir' => false,
            'debug.exceptions' => false,
            'debug.load_time' => false,
            'debug.sql_explain' => false,
            'debug.memory' => false,
            'debug.show_errors' => false,
            'debug.error_handler' => false,
            'session.log_errors' => false,
            'tables' => [
                'acl_groups' => 'an602_acl_groups',
                'acl_options' => 'an602_acl_options',
                'acl_roles' => 'an602_acl_roles',
                'acl_roles_data' => 'an602_acl_roles_data',
                'acl_users' => 'an602_acl_users',
                'attachments' => 'an602_attachments',
                'auth_provider_oauth_token_storage' => 'an602_oauth_tokens',
                'auth_provider_oauth_states' => 'an602_oauth_states',
                'auth_provider_oauth_account_assoc' => 'an602_oauth_accounts',
                'banlist' => 'an602_banlist',
                'bbcodes' => 'an602_bbcodes',
                'bookmarks' => 'an602_bookmarks',
                'bots' => 'an602_bots',
                'captcha_qa_questions' => 'an602_captcha_questions',
                'captcha_qa_answers' => 'an602_captcha_answers',
                'captcha_qa_confirm' => 'an602_qa_confirm',
                'config' => 'an602_config',
                'config_text' => 'an602_config_text',
                'confirm' => 'an602_confirm',
                'disallow' => 'an602_disallow',
                'drafts' => 'an602_drafts',
                'ext' => 'an602_ext',
                'extensions' => 'an602_extensions',
                'extension_groups' => 'an602_extension_groups',
                'forums' => 'an602_forums',
                'forums_access' => 'an602_forums_access',
                'forums_track' => 'an602_forums_track',
                'forums_watch' => 'an602_forums_watch',
                'groups' => 'an602_groups',
                'icons' => 'an602_icons',
                'lang' => 'an602_lang',
                'log' => 'an602_log',
                'login_attempts' => 'an602_login_attempts',
                'migrations' => 'an602_migrations',
                'moderator_cache' => 'an602_moderator_cache',
                'modules' => 'an602_modules',
                'notification_emails' => 'an602_notification_emails',
                'notification_types' => 'an602_notification_types',
                'notifications' => 'an602_notifications',
                'poll_options' => 'an602_poll_options',
                'poll_votes' => 'an602_poll_votes',
                'posts' => 'an602_posts',
                'privmsgs' => 'an602_privmsgs',
                'privmsgs_folder' => 'an602_privmsgs_folder',
                'privmsgs_rules' => 'an602_privmsgs_rules',
                'privmsgs_to' => 'an602_privmsgs_to',
                'profile_fields' => 'an602_profile_fields',
                'profile_fields_data' => 'an602_profile_fields_data',
                'profile_fields_options_language' => 'an602_profile_fields_lang',
                'profile_fields_language' => 'an602_profile_lang',
                'ranks' => 'an602_ranks',
                'reports' => 'an602_reports',
                'reports_reasons' => 'an602_reports_reasons',
                'search_results' => 'an602_search_results',
                'search_wordlist' => 'an602_search_wordlist',
                'search_wordmatch' => 'an602_search_wordmatch',
                'sessions' => 'an602_sessions',
                'sessions_keys' => 'an602_sessions_keys',
                'sitelist' => 'an602_sitelist',
                'smilies' => 'an602_smilies',
                'sphinx' => 'an602_sphinx',
                'styles' => 'an602_styles',
                'styles_template' => 'an602_styles_template',
                'styles_template_data' => 'an602_styles_template_data',
                'styles_theme' => 'an602_styles_theme',
                'styles_imageset' => 'an602_styles_imageset',
                'styles_imageset_data' => 'an602_styles_imageset_data',
                'teampage' => 'an602_teampage',
                'topics' => 'an602_topics',
                'topics_posted' => 'an602_topics_posted',
                'topics_track' => 'an602_topics_track',
                'topics_watch' => 'an602_topics_watch',
                'user_group' => 'an602_user_group',
                'user_notifications' => 'an602_user_notifications',
                'users' => 'an602_users',
                'warnings' => 'an602_warnings',
                'words' => 'an602_words',
                'zebra' => 'an602_zebra',
            ],
            'core.adm_relative_path' => 'admin/',
            'core.table_prefix' => 'an602_',
            'cache.driver.class' => 'an602\\cache\\driver\\file',
            'dbal.new_link' => false,
        ];
    }
}

class lexer_6d586c2 extends \an602\template\twig\lexer implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder6d586c2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6d586c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6d586c2 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function tokenize(\Twig\Source $source)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, 'tokenize', array('source' => $source), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        return $this->valueHolder6d586c2->tokenize($source);
    }

    /**
     * {@inheritDoc}
     */
    public function fix_begin_tokens($code, $parent_nodes = [])
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, 'fix_begin_tokens', array('code' => $code, 'parent_nodes' => $parent_nodes), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        return $this->valueHolder6d586c2->fix_begin_tokens($code, $parent_nodes);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Twig\Lexer $instance) {
            unset($instance->tokens, $instance->code, $instance->cursor, $instance->lineno, $instance->end, $instance->state, $instance->states, $instance->brackets, $instance->env, $instance->source, $instance->options, $instance->regexes, $instance->position, $instance->positions, $instance->currentVarBlockLine);
        }, $instance, 'Twig\\Lexer')->__invoke($instance);

        $instance->initializer6d586c2 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Twig\Environment $env, array $options = [])
    {
        static $reflection;

        if (! $this->valueHolder6d586c2) {
            $reflection = $reflection ?: new \ReflectionClass('an602\\template\\twig\\lexer');
            $this->valueHolder6d586c2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Twig\Lexer $instance) {
            unset($instance->tokens, $instance->code, $instance->cursor, $instance->lineno, $instance->end, $instance->state, $instance->states, $instance->brackets, $instance->env, $instance->source, $instance->options, $instance->regexes, $instance->position, $instance->positions, $instance->currentVarBlockLine);
        }, $this, 'Twig\\Lexer')->__invoke($this);

        }

        $this->valueHolder6d586c2->__construct($env, $options);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__get', ['name' => $name], $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        if (isset(self::$publicProperties6d586c2[$name])) {
            return $this->valueHolder6d586c2->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d586c2;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder6d586c2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d586c2;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder6d586c2;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__isset', array('name' => $name), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d586c2;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6d586c2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__unset', array('name' => $name), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d586c2;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6d586c2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__clone', array(), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        $this->valueHolder6d586c2 = clone $this->valueHolder6d586c2;
    }

    public function __sleep()
    {
        $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, '__sleep', array(), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;

        return array('valueHolder6d586c2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Twig\Lexer $instance) {
            unset($instance->tokens, $instance->code, $instance->cursor, $instance->lineno, $instance->end, $instance->state, $instance->states, $instance->brackets, $instance->env, $instance->source, $instance->options, $instance->regexes, $instance->position, $instance->positions, $instance->currentVarBlockLine);
        }, $this, 'Twig\\Lexer')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer6d586c2 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer6d586c2;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer6d586c2 && ($this->initializer6d586c2->__invoke($valueHolder6d586c2, $this, 'initializeProxy', array(), $this->initializer6d586c2) || 1) && $this->valueHolder6d586c2 = $valueHolder6d586c2;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6d586c2;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6d586c2;
    }


}
