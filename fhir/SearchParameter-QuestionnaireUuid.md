# QuestionnaireUuid - KIP Infrastructure v1.25.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireUuid**

## SearchParameter: QuestionnaireUuid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireUuid | *Version*:1.25.1 |
| Active as of 2026-09-09 | *Computable Name*:QuestionnaireUuid |

 
Search by uuid in Questionnaire 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireUuid",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireUuid",
  "version" : "1.25.1",
  "name" : "QuestionnaireUuid",
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
  "description" : "Search by uuid in Questionnaire",
  "code" : "uuid",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.extension.where(url='uuid')",
  "comparator" : ["eq"]
}

```
