# Behandling (DHR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandling (DHR)**

## ValueSet: Behandling (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingDHR | *Version*:2.27.2 |
| Active as of 2022-11-08 | *Computable Name*:BehandlingDHR |

 
Behandling (DHR) 

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
  "id" : "BehandlingDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingDHR",
  "version" : "2.27.2",
  "name" : "BehandlingDHR",
  "title" : "Behandling (DHR)",
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
  "description" : "Behandling (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentType",
      "concept" : [{
        "code" : "cerclage",
        "display" : "Cerclage"
      },
      {
        "code" : "trochantergrip",
        "display" : "Trochantergrip"
      },
      {
        "code" : "skinne",
        "display" : "Skinne"
      },
      {
        "code" : "stem",
        "display" : "Langt stem"
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
