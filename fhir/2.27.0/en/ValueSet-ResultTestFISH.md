# ResultTest_FISH - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ResultTest_FISH**

## ValueSet: ResultTest_FISH 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ResultTestFISH | *Version*:2.27.0 |
| Active as of 2022-07-12 | *Computable Name*:ResultTestFISH |

 
Resultat af test (FISH) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ResultTestFISH",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ResultTestFISH",
  "version" : "2.27.0",
  "name" : "ResultTestFISH",
  "title" : "ResultTest_FISH",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Resultat af test (FISH)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ResultTest",
      "concept" : [{
        "code" : "normal",
        "display" : "Normal"
      },
      {
        "code" : "changes",
        "display" : "Forandringer"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "Ikke udført"
      }]
    }]
  }
}

```
