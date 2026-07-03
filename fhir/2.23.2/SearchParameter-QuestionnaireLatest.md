# QuestionnaireLatest - KIP Infrastructure v2.23.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **QuestionnaireLatest**

## SearchParameter: QuestionnaireLatest 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireLatest | *Version*:2.23.2 |
| Active as of 2026-07-03 | *Computable Name*:QuestionnaireLatest |

 
Search Questionnaire for 'latest' extension 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "QuestionnaireLatest",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/QuestionnaireLatest",
  "version" : "2.23.2",
  "name" : "QuestionnaireLatest",
  "status" : "active",
  "date" : "2026-07-03T09:28:03+00:00",
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
  "description" : "Search Questionnaire for 'latest' extension",
  "code" : "latest",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.extension.where(url='latest').value",
  "comparator" : ["eq"]
}

```
