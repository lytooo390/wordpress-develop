<?php
// Load WordPress core
const WP_USE_THEMES = false;
require 'wp-blog-header.php';
// Load custom theme
define('WP_THEME_DIR', __DIR__ . '/wp-content/themes/my-theme');
// Load custom plugins
define('WP_PLUGIN_DIR', __DIR__ . '/wp-content/plugins/my-plugin');

// Load custom configuration
define('WP_CONFIG_DIR', __DIR__ . '/wp-config.php');
// Load custom functions
require_once(WP_CONFIG_DIR);
require_once(WP_THEME_DIR . '/functions.php');
// Load custom template
require_once(WP_THEME_DIR . '/template.php');
// Load custom styles
require_once(WP_THEME_DIR . '/styles.php');
// Load custom scripts
require_once(WP_THEME_DIR . '/scripts.php');
// Load custom widgets
require_once(WP_THEME_DIR . '/widgets.php');
// Load custom shortcodes
require_once(WP_THEME_DIR . '/shortcodes.php');
// Load custom REST API endpoints
require_once(WP_THEME_DIR . '/rest-api.php');
// Load custom admin functions
require_once(WP_THEME_DIR . '/admin.php');
// Load custom customizer settings
require_once(WP_THEME_DIR . '/customizer.php');
// Load custom theme support
require_once(WP_THEME_DIR . '/theme-support.php');
// Load custom post types
require_once(WP_THEME_DIR . '/post-types.php');
// Load custom taxonomies
require_once(WP_THEME_DIR . '/taxonomies.php');
// Load custom meta boxes
require_once(WP_THEME_DIR . '/meta-boxes.php');
// Load custom options pages
require_once(WP_THEME_DIR . '/options-pages.php');
// Load custom scripts and styles
require_once(WP_THEME_DIR . '/scripts-styles.php');
// Load custom translations
require_once(WP_THEME_DIR . '/translations.php');
// Load custom error handling
require_once(WP_THEME_DIR . '/error-handling.php');
// Load custom security measures
require_once(WP_THEME_DIR . '/security.php');
// Load custom performance optimizations
require_once(WP_THEME_DIR . '/performance.php');
// Load custom debugging tools
require_once(WP_THEME_DIR . '/debugging.php');
// Load custom testing tools
require_once(WP_THEME_DIR . '/testing.php');
// Load custom deployment tools
require_once(WP_THEME_DIR . '/deployment.php');
// Load custom backup tools
require_once(WP_THEME_DIR . '/backup.php');
// Load custom caching tools
require_once(WP_THEME_DIR . '/caching.php');
// Load custom CDN integration
require_once(WP_THEME_DIR . '/cdn.php');
// Load custom analytics integration
require_once(WP_THEME_DIR . '/analytics.php');
// Load custom SEO tools
require_once(WP_THEME_DIR . '/seo.php');
// Load custom social media integration
require_once(WP_THEME_DIR . '/social-media.php');
// Load custom email integration
require_once(WP_THEME_DIR . '/email.php');
// Load custom payment gateway integration
require_once(WP_THEME_DIR . '/payment-gateway.php');
// Load custom membership integration
require_once(WP_THEME_DIR . '/membership.php');
// Load custom e-commerce integration
require_once(WP_THEME_DIR . '/e-commerce.php');
// Load custom event management
require_once(WP_THEME_DIR . '/event-management.php');
// Load custom forum integration
require_once(WP_THEME_DIR . '/forum.php');
// Load custom directory integration
require_once(WP_THEME_DIR . '/directory.php');
// Load custom knowledge base integration
require_once(WP_THEME_DIR . '/knowledge-base.php');
// Load custom documentation integration
require_once(WP_THEME_DIR . '/documentation.php');
// Load custom API integration
require_once(WP_THEME_DIR . '/api.php');
// Load custom third-party integrations
require_once(WP_THEME_DIR . '/third-party.php');
// Load custom user roles and capabilities
require_once(WP_THEME_DIR . '/user-roles.php');
// Load custom user profiles
require_once(WP_THEME_DIR . '/user-profiles.php');
// Load custom user notifications
require_once(WP_THEME_DIR . '/user-notifications.php');
// Load custom user activity tracking
require_once(WP_THEME_DIR . '/user-activity.php');
// Load custom user management
require_once(WP_THEME_DIR . '/user-management.php');
// Load custom user registration
require_once(WP_THEME_DIR . '/user-registration.php');
// Load custom user login
require_once(WP_THEME_DIR . '/user-login.php');
// Load custom user logout
require_once(WP_THEME_DIR . '/user-logout.php');
// Load custom user password reset
require_once(WP_THEME_DIR . '/user-password-reset.php');
// Load custom user profile editing
require_once(WP_THEME_DIR . '/user-profile-editing.php');
// Load custom user account management
require_once(WP_THEME_DIR . '/user-account-management.php');
// Load custom user account security
require_once(WP_THEME_DIR . '/user-account-security.php');
// Load custom user account recovery
require_once(WP_THEME_DIR . '/user-account-recovery.php');
// Load custom user account deletion
require_once(WP_THEME_DIR . '/user-account-deletion.php');
// Load custom user account privacy
require_once(WP_THEME_DIR . '/user-account-privacy.php');
// Load custom user account settings
require_once(WP_THEME_DIR . '/user-account-settings.php');
// Load custom user account notifications
require_once(WP_THEME_DIR . '/user-account-notifications.php');
// Load custom user account activity
require_once(WP_THEME_DIR . '/user-account-activity.php');
// Load custom user account roles
require_once(WP_THEME_DIR . '/user-account-roles.php');
// Load custom user account capabilities
require_once(WP_THEME_DIR . '/user-account-capabilities.php');
// Load custom user account permissions
require_once(WP_THEME_DIR . '/user-account-permissions.php');
// Load custom user account groups
require_once(WP_THEME_DIR . '/user-account-groups.php');
// Load custom user account tags
require_once(WP_THEME_DIR . '/user-account-tags.php');
// Load custom user account notes
require_once(WP_THEME_DIR . '/user-account-notes.php');
// Load custom user account history
require_once(WP_THEME_DIR . '/user-account-history.php');
// Load custom user account preferences
require_once(WP_THEME_DIR . '/user-account-preferences.php');
// Load custom user account settings
require_once(WP_THEME_DIR . '/user-account-settings.php');
// Load custom user account notifications
require_once(WP_THEME_DIR . '/user-account-notifications.php');
// Load custom user account activity
require_once(WP_THEME_DIR . '/user-account-activity.php');
// Load custom user account roles
require_once(WP_THEME_DIR . '/user-account-roles.php');
// Load custom user account capabilities
require_once(WP_THEME_DIR . '/user-account-capabilities.php');
// Load custom user account permissions
require_once(WP_THEME_DIR . '/user-account-permissions.php');
// Load custom user account groups
require_once(WP_THEME_DIR . '/user-account-groups.php');
// Load custom user account tags
require_once(WP_THEME_DIR . '/user-account-tags.php');
// Load custom user account notes
require_once(WP_THEME_DIR . '/user-account-notes.php');
// Load custom user account history
require_once(WP_THEME_DIR . '/user-account-history.php');
// Load custom user account settings
require_once(WP_THEME_DIR . '/user-account-settings.php');
// Load custom user account notifications
require_once(WP_THEME_DIR . '/user-account-notifications.php');
// Load custom user account activity
require_once(WP_THEME_DIR . '/user-account-activity.php');
// Load custom user account roles
require_once(WP_THEME_DIR . '/user-account-roles.php');
// Load custom user account capabilities
require_once(WP_THEME_DIR . '/user-account-capabilities.php');
// Load custom user account permissions
require_once(WP_THEME_DIR . '/user-account-permissions.php');
// Load custom user account groups
require_once(WP_THEME_DIR . '/user-account-groups.php');
// Load custom user account tags
require_once(WP_THEME_DIR . '/user-account-tags.php');
// Load custom user account notes
require_once(WP_THEME_DIR . '/user-account-notes.php');
// Load custom user account history
require_once(WP_THEME_DIR . '/user-account-history.php');
// Load custom user account preferences
require_once(WP_THEME_DIR . '/user-account-preferences.php');
// Load custom user account settings
require_once(WP_THEME_DIR . '/user-account-settings.php');
// Load custom user account notifications
require_once(WP_THEME_DIR . '/user-account-notifications.php');
// Load custom user account activity
require_once(WP_THEME_DIR . '/user-account-activity.php');
// Load custom user account roles
require_once(WP_THEME_DIR . '/user-account-roles.php');
// Load custom user account capabilities
require_once(WP_THEME_DIR . '/user-account-capabilities.php');
// Load custom user account permissions
require_once(WP_THEME_DIR . '/user-account-permissions.php');
// Load custom user account groups
require_once(WP_THEME_DIR . '/user-account-groups.php');
// Load custom user account tags
require_once(WP_THEME_DIR . '/user-account-tags.php');
// Load custom user account notes
require_once(WP_THEME_DIR . '/user-account-notes.php');
// Load custom user account history
require_once(WP_THEME_DIR . '/user-account-history.php');
// Load custom user account preferences
require_once(WP_THEME_DIR . '/user-account-preferences.php');
// Load custom user account settings
require_once(WP_THEME_DIR . '/user-account-settings.php');
// Load custom user account notifications
require_once(WP_THEME_DIR . '/user-account-notifications.php');
// Load custom user account activity
require_once(WP_THEME_DIR . '/user-account-activity.php');
// Load custom user account roles
require_once(WP_THEME_DIR . '/user-account-roles.php');
// Load custom user account capabilities
require_once(WP_THEME_DIR . '/user-account-capabilities.php');
// Load custom user account permissions
require_once(WP_THEME_DIR . '/user-account-permissions.php');
// Load custom user account groups
require_once(WP_THEME_DIR . '/user-account-groups.php');
// Load custom user account tags
require_once(WP_THEME_DIR . '/user-account-tags.php');
// Load custom user account notes
require_once(WP_THEME_DIR . '/user-account-notes.php');
// Load custom user account history
require_once(WP_THEME_DIR . '/user-account-history.php');
// Load custom user account preferences
require_once(WP_THEME_DIR . '/user-account-preferences.php');
// Load custom user account settings
require_once(WP_THEME_DIR . '/user-account-settings.php');
// Load custom user account notifications
require_once(WP_THEME_DIR . '/user-account-notifications.php');
// Load custom user account activity
require_once(WP_THEME_DIR . '/user-account-activity.php');
// Load custom user account roles
require_once(WP_THEME_DIR . '/user-account-roles.php');
// Load custom user account capabilities
require_once(WP_THEME_DIR . '/user-account-capabilities.php');
// Load custom user account permissions
require_once(WP_THEME_DIR . '/user-account-permissions.php');
// Load custom user account groups
require_once(WP_THEME_DIR . '/user-account-groups.php');
// Load custom user account tags
require_once(WP_THEME_DIR . '/user-account-tags.php');
// Load custom user account notes
require_once(WP_THEME_DIR . '/user-account-notes.php');
// Load custom user account history
require_once(WP_THEME_DIR . '/user-account-history.php');
// Load custom user account preferences
require_once(WP_THEME_DIR . '/user-account-preferences.php');
// Load custom user account settings
require_once(WP_THEME_DIR . '/user-account-settings.php');
// Load custom user account notifications
require_once(WP_THEME_DIR . '/user-account-notifications.php');
// Load custom user account activity
require_once(WP_THEME_DIR . '/user-account-activity.php');
// Load custom user account roles
require_once(WP_THEME_DIR . '/user-account-roles.php');
// Load custom user account capabilities
require_once(WP_THEME_DIR . '/user-account-capabilities.php');
// Load custom user account permissions
require_once(WP_THEME_DIR . '/user-account-permissions.php');
// Load custom user account groups
require_once(WP_THEME_DIR . '/user-account-groups.php');
// Load custom user account tags
require_once(WP_THEME_DIR . '/user-account-tags.php');
// Load custom user account notes
require_once(WP_THEME_DIR . '/user-account-notes.php');
// Load custom user account history
require_once(WP_THEME_DIR . '/user-account-history.php');
// Load custom user account preferences
require_once(WP_THEME_DIR . '/user-account-preferences.php');