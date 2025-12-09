# QuestionnaireResponseOnCarePlan - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireResponseOnCarePlan**

## SearchParameter: QuestionnaireResponseOnCarePlan 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseOnCarePlan | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:QuestionnaireResponseOnCarePlan |

 
Search by a QuestionnaireResponse reference for a CarePlan 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireResponseOnCarePlan",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseOnCarePlan",
  "version" : "2.17.1",
  "name" : "QuestionnaireResponseOnCarePlan",
  "status" : "active",
  "date" : "2025-12-09T08:48:57+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Search by a QuestionnaireResponse reference for a CarePlan",
  "code" : "questionnaire-response-reference",
  "base" : ["CarePlan"],
  "type" : "reference",
  "expression" : "CarePlan.activity.outcomeReference",
  "comparator" : ["eq"]
}

```
