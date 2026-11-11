# Varighed (DKR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Varighed (DKR)**

## ValueSet: Varighed (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VarighedDKR | *Version*:2.27.3 |
| Active as of 2023-05-17 | *Computable Name*:VarighedDKR |

 
Varighed (DKR) 

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
  "id" : "VarighedDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VarighedDKR",
  "version" : "2.27.3",
  "name" : "VarighedDKR",
  "title" : "Varighed (DKR)",
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
  "description" : "Varighed (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen pause"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Cyclus",
      "concept" : [{
        "code" : "1-2-dage",
        "display" : "1-2 dage"
      },
      {
        "code" : "3-4-dage",
        "display" : "3-4 dage"
      },
      {
        "code" : "5-6-dage",
        "display" : "5-6 dage"
      },
      {
        "code" : "ge7-dage",
        "display" : ">= 7 dage"
      }]
    }]
  }
}

```
