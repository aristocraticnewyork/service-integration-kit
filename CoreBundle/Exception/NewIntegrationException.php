<?php
namespace CrowdValley\Bundle\CoreBundle\Exception;
use FOS\RestBundle\Util\Codes;

class NewIntegrationException extends CVException
{
    protected $userMessage = "";
    protected $devMessage = "";
    protected $code = 0;

    public function invalidParameterOrganizationId()
    {
        $this->userMessage = 'Failed to retrieve Twitter feed for Organization (Code: 50001)';
        $this->devMessage = 'Parameter missing: organization_id';
        $this->code = 50001;
        $this->statusCode = Codes::HTTP_BAD_REQUEST;
        return $this;
    }
	
	public function organizationTwitterNotFound()
    {
        $this->userMessage = 'Failed to retrieve Twitter feed for Organization (Code: 50002)';
        $this->devMessage = 'Organization\'s twitter field not found';
        $this->code = 50002;
        $this->statusCode = Codes::HTTP_NOT_FOUND;
        return $this;
    }
}
