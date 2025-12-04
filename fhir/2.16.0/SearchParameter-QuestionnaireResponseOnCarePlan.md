# QuestionnaireResponseOnCarePlan - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireResponseOnCarePlan**

## SearchParameter: QuestionnaireResponseOnCarePlan 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseOnCarePlan | *Version*:2.16.0 |
| Active as of 2025-12-04 | *Computable Name*:QuestionnaireResponseOnCarePlan |

 
Search by a QuestionnaireResponse reference for a CarePlan 

## QuestionnaireResponseOnCarePlan

Parameter `questionnaire-response-reference`:`reference`

Search by a QuestionnaireResponse reference for a CarePlan

| | |
| :--- | :--- |
| Resource | [CarePlan](http://hl7.org/fhir/R4/careplan.html) |
| Expression | `CarePlan.activity.outcomeReference` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |
| Comparators | Allowed: eq |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireResponseOnCarePlan",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseOnCarePlan",
  "version" : "2.16.0",
  "name" : "QuestionnaireResponseOnCarePlan",
  "status" : "active",
  "date" : "2025-12-04T11:23:14+00:00",
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
