# QuestionnaireResponseResponsibleOnCarePlan - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireResponseResponsibleOnCarePlan**

## SearchParameter: QuestionnaireResponseResponsibleOnCarePlan 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseResponsibleOnCarePlan | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:QuestionnaireResponseResponsibleOnCarePlan |

 
Search a CarePlan for responsible SOR code on a QuestionnaireResponse 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireResponseResponsibleOnCarePlan",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireResponseResponsibleOnCarePlan",
  "version" : "2.17.1",
  "name" : "QuestionnaireResponseResponsibleOnCarePlan",
  "status" : "active",
  "date" : "2025-12-09T08:52:30+00:00",
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
  "description" : "Search a CarePlan for responsible SOR code on a QuestionnaireResponse",
  "code" : "questionnaire-response-responsible-sor",
  "base" : ["CarePlan"],
  "type" : "token",
  "expression" : "CarePlan.activity.outcomeReference.extension.where(url='responsible')",
  "comparator" : ["eq"]
}

```
