# Questionnaire url+version - KIP Infrastructure v2.19.4

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire url+version**

## SearchParameter: Questionnaire url+version 

| | |
| :--- | :--- |
| *Official URL*:http://kip.sundk.dk/fhir/SearchParameter/SP-Questionnaire-urlversion | *Version*:2.19.4 |
| Active as of 2026-04-27 | *Computable Name*:urlversion |

 
SearchParameter to match Questionnaire by both url and version 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SP-Questionnaire-urlversion",
  "url" : "http://kip.sundk.dk/fhir/SearchParameter/SP-Questionnaire-urlversion",
  "version" : "2.19.4",
  "name" : "urlversion",
  "status" : "active",
  "date" : "2026-04-27T07:58:16+00:00",
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
  "description" : "SearchParameter to match Questionnaire by both url and version",
  "code" : "urlversion",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.url & '_' & Questionnaire.version"
}

```
