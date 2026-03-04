# QuestionnaireUuid - KIP Infrastructure v2.19.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireUuid**

## SearchParameter: QuestionnaireUuid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireUuid | *Version*:2.19.2 |
| Active as of 2026-03-04 | *Computable Name*:QuestionnaireUuid |

 
Search by uuid in Questionnaire 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireUuid",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireUuid",
  "version" : "2.19.2",
  "name" : "QuestionnaireUuid",
  "status" : "active",
  "date" : "2026-03-04T14:39:18+00:00",
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
