<?php

return [
    'title' => 'Settings',
    'saved' => 'Settings saved',
    'save_failed' => 'Failed to save Settings',
    'navigation' => [
        'general' => 'General',
        'captcha' => 'Captcha',
        'mail' => 'Mail',
        'backup' => 'Backup',
        'oauth' => 'OAuth',
        'misc' => 'Misc',
    ],
    'general' => [
        'app_name' => 'App Name',
        'app_favicon' => 'App Favicon',
        'app_favicon_help' => 'Favicons should be placed in the public folder, located in the root panel directory.',
        'debug_mode' => 'Debug Mode',
        'navigation' => 'Navigation',
        'sidebar' => 'Sidebar',
        'topbar' => 'Topbar',
        'unit_prefix' => 'Unit Prefix',
        'decimal_prefix' => 'Decimal Prefix (MB/GB)',
        'binary_prefix' => 'Binary Prefix (MiB/GiB)',
        '2fa_requirement' => '2FA Requirement',
        'not_required' => 'Not Required',
        'admins_only' => 'Required for Admins Only',
        'all_users' => 'Required for All Users',
        'trusted_proxies' => 'Trusted Proxies',
        'trusted_proxies_help' => 'New IP or IP Range',
        'clear' => 'Clear',
        'set_to_cf' => 'Set to Cloudflare IPs',
        'display_width' => 'Display Width',
    ],
    'captcha' => [
        'enable' => 'Enable Turnstile Captcha?',
        'info_label' => 'Info',
        'info' => 'You can generate the keys on your Cloudflare Dashboard. A Cloudflare account is required.',
        'site_key' => 'Site Key',
        'secret_key' => 'Secret Key',
        'verify' => 'Verify Domain?',
    ],
    'mail' => [
        'mail_driver' => 'Mail Driver',
        'test_mail' => 'Send Test Mail',
        'test_mail_sent' => 'Test Mail sent',
        'test_mail_failed' => 'Test Mail failed',
        'from_settings' => 'From Settings',
        'from_settings_help' => 'Set the Address and Name used as "From" in mails.',
        'from_address' => 'From Address',
        'from_name' => 'From Name',
        'smtp' => [
            'smtp_title' => 'SMTP Configuration',
            'host' => 'Host',
            'port' => 'Port',
            'username' => 'Username',
            'password' => 'Password',
            'encryption' => 'Encryption',
            'ssl' => 'SSL',
            'tls' => 'TLS',
            'none' => 'None',
        ],
        'mailgun' => [
            'mailgun_title' => 'Mailgun Configuration',
            'domain' => 'Domain',
            'secret' => 'Secret',
            'endpoint' => 'Endpoint',
        ],
    ],
    'backup' => [
        'backup_driver' => 'Backup Driver',
        'throttle' => 'Throttles',
        'throttle_help' => 'Configure how many backups can be created in a period. Set period to 0 to disable this throttle.',
        'limit' => 'Limit',
        'period' => 'Period',
        'seconds' => 'Seconds',
        's3' => [
            's3_title' => 'S3 Configuration',
            'default_region' => 'Default Region',
            'access_key' => 'Access Key ID',
            'secret_key' => 'Secret Access Key',
            'bucket' => 'Bucket',
            'endpoint' => 'Endpoint',
            'use_path_style_endpoint' => 'Use Path Style Endpoint',
        ],
    ],
    'oauth' => [
        'enable' => 'Enable',
        'disable' => 'Disable',
        'client_id' => 'Client ID',
        'client_secret' => 'Client Secret',
        'redirect' => 'Redirect URL',
        'web_api_key' => 'Web API Key',
        'base_url' => 'Base URL',
        'display_name' => 'Display Name',
        'auth_url' => 'Authorization callback URL',
    ],
    'misc' => [
        'auto_allocation' => [
            'title' => 'Automatic Allocation Creation',
            'helper' => 'Toggle if Users can create allocations via the client area.',
            'question' => 'Allow Users to create Allocations?',
            'start' => 'Start Port',
            'end' => 'End Port',
        ],
        'mail_notifications' => [
            'title' => 'Mail Notifications',
            'helper' => 'Toggle which mail notifications should be sent to Users.',
            'server_installed' => 'Server Installed',
            'server_reinstalled' => 'Server Reinstalled',
        ],
        'connections' => [
            'title' => 'Connections',
            'helper' => 'Timeouts used when making requests.',
            'request_timeout' => 'Request Timeout',
            'connection_timeout' => 'Connection Timeout',
            'seconds' => 'Seconds',
        ],
        'activity_log' => [
            'title' => 'Activity Logs',
            'helper' => 'Configure how often old activity logs should be pruned and whether admin activities should be logged.',
            'prune_age' => 'Prune Age',
            'days' => 'Days',
            'log_admin' => 'Hide admin activities?',
        ],
        'api' => [
            'title' => 'API',
            'helper' => 'Defines the rate limit for the number of requests per minute that can be executed.',
            'client_rate' => 'Client API Rate Limit',
            'app_rate' => 'Application API Rate Limit',
            'rpm' => 'Requests per Minute',
        ],
        'server' => [
            'title' => 'Servers',
            'helper' => 'Settings for Servers',
            'edit_server_desc' => 'Allow Users to edit Descriptions?',
        ],
        'webhook' => [
            'title' => 'Webhooks',
            'helper' => 'Configure how often old webhook logs should be pruned.',
            'prune_age' => 'Prune Age',
            'days' => 'Days',
        ],
    ],
];
