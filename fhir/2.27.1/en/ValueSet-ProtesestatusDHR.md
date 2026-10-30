# Protesestatus (DHR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Protesestatus (DHR)**

## ValueSet: Protesestatus (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProtesestatusDHR | *Version*:2.27.1 |
| Active as of 2022-11-08 | *Computable Name*:ProtesestatusDHR |

 
Protesestatus (DHR) 

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
  "id" : "ProtesestatusDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProtesestatusDHR",
  "version" : "2.27.1",
  "name" : "ProtesestatusDHR",
  "title" : "Protesestatus (DHR)",
  "status" : "active",
  "date" : "2022-11-08T00:00:00+02:00",
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
  "description" : "Protesestatus (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "cemented",
        "display" : "Cementeret"
      },
      {
        "code" : "uncemented",
        "display" : "Ucementeret"
      },
      {
        "code" : "hybrid_a",
        "display" : "Hybrid A (cementeret femur)"
      },
      {
        "code" : "hybrid_b",
        "display" : "Hybrid B (cementeret acetabulum)"
      },
      {
        "code" : "girdlestone",
        "display" : "Girdlestone status"
      },
      {
        "code" : "cement_spacer",
        "display" : "Cementspacer"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
