server '162.243.173.166', user: "deploy", roles: %w{app}

set :branch, "master"
set :deploy_to, "/var/www/reimaginedbylindsay.com/html"

set :ssh_options, {
  forward_agent: true,
}

namespace :deploy do
   task :permissions do
     on roles :all do
     execute "chmod -R 777 #{release_path}"
     end
   end
   after :updated, :permissions
end
