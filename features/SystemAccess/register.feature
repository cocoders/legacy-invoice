Feature: In order to use our system website visitors need to register

  Scenario: Successfull registration
    Given I am website visistor
    And I want to register
    When I give following information:
      | email         | leszek.prabucki@gmail.com |
      | password      | test123                   |
      | vat id number | 5932455641                |
    Then I should be able to access system using following credentials:
      | email         | leszek.prabucki@gmail.com |
      | password      | test123                   |

  Scenario: VatIdNumber is required to register
