<?php

class DeleteUserCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendDelete('/api/users/2');
        $I->seeResponseCodeIs(204); //status response = 204
    }
}
