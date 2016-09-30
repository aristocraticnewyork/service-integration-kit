<?php
namespace ApiBundle\Controller;

class NewIntegrationController  extends CVFOSRestController
{
	/**
     * Get Organizations twitter feed
     *
     * @Route("/organizations/{organization_id}/twitter/feed")
     * @Method("GET")
     */
    public function getSocialFacebookLinkAction(Request $request, $organization_id)
    {
        return $this->handleView($this->createView($this->get('new_service')->getTwitterFeedForOrganizationWithId($organization_id)));
    }
}