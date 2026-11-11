# Komplikationer, peroperative (DKR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer, peroperative (DKR)**

## ValueSet: Komplikationer, peroperative (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerPeroperativeDKR | *Version*:2.27.3 |
| Active as of 2022-10-14 | *Computable Name*:KomplikationerPeroperativeDKR |

 
Komplikationer, peroperative (DKR) 

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
  "id" : "KomplikationerPeroperativeDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerPeroperativeDKR",
  "version" : "2.27.3",
  "name" : "KomplikationerPeroperativeDKR",
  "title" : "Komplikationer, peroperative (DKR)",
  "status" : "active",
  "date" : "2022-10-14T00:00:00+02:00",
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
  "description" : "Komplikationer, peroperative (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
      "concept" : [{
        "code" : "fracture_patella",
        "display" : "Patellafraktur"
      },
      {
        "code" : "fracture_tibia",
        "display" : "Tibiafraktur"
      },
      {
        "code" : "fracture_femur",
        "display" : "Femurfraktur"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "rupture_patella_ligament",
        "display" : "Ruptur af patellasene"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
