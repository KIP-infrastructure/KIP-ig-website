# Brusklæsion, behandling (DKRR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Brusklæsion, behandling (DKRR)**

## ValueSet: Brusklæsion, behandling (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BrusklaesionBehandlingDKRR | *Version*:2.27.1 |
| Active as of 2022-09-19 | *Computable Name*:BrusklaesionBehandlingDKRR |

 
Brusklæsion, behandling (DKRR) 

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
  "id" : "BrusklaesionBehandlingDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BrusklaesionBehandlingDKRR",
  "version" : "2.27.1",
  "name" : "BrusklaesionBehandlingDKRR",
  "title" : "Brusklæsion, behandling (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Brusklæsion, behandling (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentLesion",
      "concept" : [{
        "code" : "debridement",
        "display" : "Debridement"
      },
      {
        "code" : "microfracture",
        "display" : "Mikrofraktur"
      },
      {
        "code" : "mosaic_plastic",
        "display" : "Mosaikplastik"
      },
      {
        "code" : "synthetic_scaffold",
        "display" : "Syntetisk scaffold"
      },
      {
        "code" : "cell_transplantation",
        "display" : "Celletransplantation"
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
