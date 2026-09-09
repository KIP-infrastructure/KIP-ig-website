# QuestionnaireResponseOnCarePlan - KIP Infrastructure v1.25.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireResponseOnCarePlan**

## SearchParameter: QuestionnaireResponseOnCarePlan 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseOnCarePlan | *Version*:1.25.1 |
| Active as of 2026-09-09 | *Computable Name*:QuestionnaireResponseOnCarePlan |

 
Search by a QuestionnaireResponse reference for a CarePlan 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireResponseOnCarePlan",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseOnCarePlan",
  "version" : "1.25.1",
  "name" : "QuestionnaireResponseOnCarePlan",
  "status" : "active",
  "date" : "2026-09-09T09:26:10+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Search by a QuestionnaireResponse reference for a CarePlan",
  "code" : "questionnaire-response-reference",
  "base" : ["CarePlan"],
  "type" : "reference",
  "expression" : "CarePlan.activity.outcomeReference",
  "comparator" : ["eq"]
}

```
