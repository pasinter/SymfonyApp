require 'capistrano/ext/multistage'

set :application, "ProductionCo"
set :domain,      "#{application}.com"
set :deploy_to,   "/var/www/#{domain}"
set :app_path,    "app"
set :stages,        %w(prod staging)
set :default_stage, "staging"
set :stage_dir,     "app/config"

set :repository,  "#{domain}:/var/repos/#{application}.git"
set :scm,         :git
set   :repository,    "git@github.com:pasinter/FilmProductionCo.git"

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server



set   :use_sudo,      false

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
 logger.level = Logger::MAX_LEVEL
 
 