Feature:
  Scenario: It inserts entities and shows the correct amount
    Given I am on "/"
    Then I should see "found 1 entities"

    Given I am on "/"
    Then I should see "found 2 entities"

  Scenario: Within this scenario the previous inserts should be rolled back
    Given I am on "/"
    Then I should see "found 1 entities"
