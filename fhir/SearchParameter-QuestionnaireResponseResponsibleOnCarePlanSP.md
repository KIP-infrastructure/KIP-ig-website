# QuestionnaireResponseResponsibleOnCarePlanSP - KIP Infrastructure v2.19.4

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireResponseResponsibleOnCarePlanSP**

## SearchParameter: QuestionnaireResponseResponsibleOnCarePlanSP 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseResponsibleOnCarePlan | *Version*:2.19.4 |
| Active as of 2026-04-27 | *Computable Name*:QuestionnaireResponseResponsibleOnCarePlan |

 
Search a CarePlan for responsible SOR code on a QuestionnaireResponse 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireResponseResponsibleOnCarePlanSP",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseResponsibleOnCarePlan",
  "version" : "2.19.4",
  "name" : "QuestionnaireResponseResponsibleOnCarePlan",
  "status" : "active",
  "date" : "2026-04-27T08:01:27+00:00",
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
  "description" : "Search a CarePlan for responsible SOR code on a QuestionnaireResponse",
  "code" : "questionnaire-response-responsible-sor",
  "base" : ["CarePlan"],
  "type" : "token",
  "expression" : "CarePlan.activity.outcomeReference.extension.where(url='responsible')",
  "comparator" : ["eq"]
}

```
