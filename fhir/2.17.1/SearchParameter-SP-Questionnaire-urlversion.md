# Questionnaire url+version - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Questionnaire url+version**

## SearchParameter: Questionnaire url+version 

| | |
| :--- | :--- |
| *Official URL*:http://kip.sundk.dk/fhir/SearchParameter/SP-Questionnaire-urlversion | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:urlversion |

 
SearchParameter to match Questionnaire by both url and version 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SP-Questionnaire-urlversion",
  "url" : "http://kip.sundk.dk/fhir/SearchParameter/SP-Questionnaire-urlversion",
  "version" : "2.17.1",
  "name" : "urlversion",
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
  "description" : "SearchParameter to match Questionnaire by both url and version",
  "code" : "urlversion",
  "base" : ["Questionnaire"],
  "type" : "token",
  "expression" : "Questionnaire.url & '_' & Questionnaire.version"
}

```
