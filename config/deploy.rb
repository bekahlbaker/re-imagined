# config valid only for Capistrano 3.1
lock '>=3.2.1'

set :application, 'reimaginedbylindsay.com'
set :repo_url, 'git@github.com:bekahlbaker/re-imagined.git'

set :linked_dirs, %w{wp-content/uploads wp-content/plugins/all-in-one-wp-migration/storage wp-content/themes/sq1/node_modules wp-content/w3tc-config}
set :linked_files, %w{wp-config.php robots.txt nginx.conf}

