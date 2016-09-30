# service-integration-kit
Integration Kit to use when adding third-party services to the Crowd Valley API

In order to add new third-party services to the Crowd Valley API, fork this repository, add your code, and then submit a Pull Request for the Crowd Valley development team to review.

A sample code structure has been provided using the example of retrieving a Twitter feed for an Organization based on the Organization's `twitter` attribute.

Please follow the same structure as follows:

- Controllers define the API route and call a Service
- Services validate the request, throwing Exceptions if required, and perform the business logic of the function
- Exceptions return a code, user message and developer message to help the debugging process

For other examples of third-party API code that has already been submitted and merged to the Crowd Valley API, please refer to http://www.crowdvalley.com/api
