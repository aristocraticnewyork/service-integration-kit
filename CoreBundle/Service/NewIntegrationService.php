<?php
namespace CoreBundle\Services;

use CoreBundle\Exception\NewIntegrationException;

class NewIntegrationService extends BaseService
{
	
	public function getTwitterFeedForOrganizationWithId($organization_id}
	{
		// step 1 - validate request
		// check for valid $organization_id
		if(!isset($organization_id))
            $this->error_service->handleException((new NewIntegrationException())->invalidParameterOrganizationId());
		// check for valid $organization->getTwitter()
		if(!$organization->getTwitter())
            $this->error_service->handleException((new NewIntegrationException())->organizationTwitterNotFound());
		
		// step 2 - retrieve data
		$twitterFeedArray = array();

		// step 3 - send back to controller
		return $this->returnSuccessResponse($twitterFeedArray);
	}
}