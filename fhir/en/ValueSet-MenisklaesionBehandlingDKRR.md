# Menisklæsion, behandling (DKRR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Menisklæsion, behandling (DKRR)**

## ValueSet: Menisklæsion, behandling (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MenisklaesionBehandlingDKRR | *Version*:2.27.2 |
| Active as of 2022-09-19 | *Computable Name*:MenisklaesionBehandlingDKRR |

 
Menisklæsion, behandling (DKRR) 

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
  "id" : "MenisklaesionBehandlingDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MenisklaesionBehandlingDKRR",
  "version" : "2.27.2",
  "name" : "MenisklaesionBehandlingDKRR",
  "title" : "Menisklæsion, behandling (DKRR)",
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
  "description" : "Menisklæsion, behandling (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentLesion",
      "concept" : [{
        "code" : "resection",
        "display" : "Resektion"
      },
      {
        "code" : "suture",
        "display" : "Sutur"
      },
      {
        "code" : "all_inside",
        "display" : "All inside"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden operation"
      }]
    }]
  }
}

```
