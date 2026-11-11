# Walch klassifikation (DSR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Walch klassifikation (DSR)**

## ValueSet: Walch klassifikation (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/WalchKlassifikationDSR | *Version*:2.27.3 |
| Active as of 2022-10-06 | *Computable Name*:WalchKlassifikationDSR |

 
Walch klassifikation (DSR) 

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
  "id" : "WalchKlassifikationDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/WalchKlassifikationDSR",
  "version" : "2.27.3",
  "name" : "WalchKlassifikationDSR",
  "title" : "Walch klassifikation (DSR)",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Walch klassifikation (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/WalchClassification",
      "concept" : [{
        "code" : "type_a1",
        "display" : "A1"
      },
      {
        "code" : "type_a2",
        "display" : "A2"
      },
      {
        "code" : "type_b1",
        "display" : "B1"
      },
      {
        "code" : "type_b2",
        "display" : "B2"
      },
      {
        "code" : "type_b3",
        "display" : "B3"
      },
      {
        "code" : "type_c",
        "display" : "C"
      },
      {
        "code" : "type_d",
        "display" : "D"
      }]
    }]
  }
}

```
