simplesamlphp test environment

This repo sets up a test simplesamlphp-sp to connect to the Umich Identity Provider.

To get started put the version of simplesamlphp you want to test in a
folder named `simplesamlphp`. Then run `docker-compose up -d`. The
`ca` folder should now contain a `ca.pem` file you can import in your
browser to https access. Then point your browser at
https://simplesamlphp.test.umich.localhost to start testing.
