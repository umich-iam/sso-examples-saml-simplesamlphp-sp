# simplesamlphp test environment

This repo is a modified fork of https://github.com/simplesamlphp/docker-simplesamlphp that sets up a test simplesamlphp-sp to connect to the Umich Identity Provider and provides **_nonprod_** example configuration.

# Running a test SP

To get started put the version of simplesamlphp you want to test in a folder named `simplesamlphp` per https://simplesamlphp.org/download. Then run `docker-compose up -d`. The `ca` folder should now contain a `ca.pem` file you can import in your browser for https access. Then point your browser at https://simplesamlphp.test.umich.localhost.

Note: SSO against the Umich Identity Provider will not work if the service has not been registered.
