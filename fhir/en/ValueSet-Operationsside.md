# Operationsside (højre/venstre) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationsside (højre/venstre)**

## ValueSet: Operationsside (højre/venstre) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Operationsside | *Version*:2.27.0 |
| Active as of 2022-07-04 | *Computable Name*:Operationsside |

 
Operationsside (højre/venstre) 

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
  "id" : "Operationsside",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Operationsside",
  "version" : "2.27.0",
  "name" : "Operationsside",
  "title" : "Operationsside (højre/venstre)",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Operationsside (højre/venstre)",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0894",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "R",
        "display" : "Højre"
      },
      {
        "code" : "L",
        "display" : "Venstre"
      }]
    }]
  }
}

```
