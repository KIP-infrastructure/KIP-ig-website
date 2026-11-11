# Cyclus længde - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cyclus længde**

## ValueSet: Cyclus længde 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Cyclus | *Version*:2.27.2 |
| Active as of 2023-05-17 | *Computable Name*:Cyclus |

 
Cyclus længde 

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
  "id" : "Cyclus",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Cyclus",
  "version" : "2.27.2",
  "name" : "Cyclus",
  "title" : "Cyclus længde",
  "status" : "active",
  "date" : "2023-05-17T00:00:00+02:00",
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
  "description" : "Cyclus længde",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Cyclus",
      "concept" : [{
        "code" : "14-dage",
        "display" : "14 dage"
      },
      {
        "code" : "21-dage",
        "display" : "21 dage"
      },
      {
        "code" : "28-dage",
        "display" : "28 dage"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      },
      {
        "code" : "continuous",
        "display" : "Kontinuerligt"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uoplyst"
      }]
    }]
  }
}

```
