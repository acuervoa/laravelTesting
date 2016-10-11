# A sample Guardfile
# More info at https://github.com/guard/guard#readme

## Uncomment and set this to only include directories you want to watch
# directories %w(app lib config test spec features) \
#  .select{|d| Dir.exists?(d) ? d : UI.warning("Directory #{d} does not exist")}

## Note: if you are using the `directories` clause above and you are not
## watching the project directory ('.'), then you will want to move
## the Guardfile to a watched dir and symlink it back, e.g.
#
#  $ mkdir config
#  $ mv Guardfile config/
#  $ ln -s config/Guardfile .
#
# and, you'll have to watch "config/Guardfile" instead of "Guardfile"
guard 'phpunit2', :cli => '--colors', :tests_path => 'app/tests', :command => "./vendor/bin/phpunit" do
	watch(%r{^.+Test\.php$})

	watch(%r{app/(.+)/(.+).php}) {|m| "tests/#{m[1]}/#{m[2]}Test.php"}
end
