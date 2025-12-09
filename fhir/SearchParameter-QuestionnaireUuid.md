# QuestionnaireUuid - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireUuid**

## SearchParameter: QuestionnaireUuid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireUuid | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:QuestionnaireUuid |

 
Search by uuid in Questionnaire 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireUuid",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireUuid",
  "version" : "2.17.1",
  "name" : "QuestionnaireUuid",
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
  "description" : "Search by uuid in Questionnaire",
  "code" : "uuid",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.extension.where(url='uuid')",
  "comparator" : ["eq"]
}

```
