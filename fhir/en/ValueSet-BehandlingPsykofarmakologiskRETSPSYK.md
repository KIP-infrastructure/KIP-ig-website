# Behandling: Psykofarmakologisk (RETSPSYK) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandling: Psykofarmakologisk (RETSPSYK)**

## ValueSet: Behandling: Psykofarmakologisk (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingPsykofarmakologiskRETSPSYK | *Version*:2.27.3 |
| Active as of 2022-09-30 | *Computable Name*:BehandlingPsykofarmakologiskRETSPSYK |

 
Behandling: Psykofarmakologisk (RETSPSYK) 

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
  "id" : "BehandlingPsykofarmakologiskRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingPsykofarmakologiskRETSPSYK",
  "version" : "2.27.3",
  "name" : "BehandlingPsykofarmakologiskRETSPSYK",
  "title" : "Behandling: Psykofarmakologisk (RETSPSYK)",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
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
  "description" : "Behandling: Psykofarmakologisk (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentPsychopharmacological",
      "concept" : [{
        "code" : "antipsychotics",
        "display" : "Antipsykotika"
      },
      {
        "code" : "antipsychotics_depot",
        "display" : "Antipsykotika, depot"
      },
      {
        "code" : "antidepressants",
        "display" : "Antidepressiva"
      },
      {
        "code" : "mood_stabilizer",
        "display" : "Stemningsstabiliserende"
      },
      {
        "code" : "benzodiazepines",
        "display" : "Benzodiazepiner"
      },
      {
        "code" : "central_stimulants",
        "display" : "Centralstimulerende medicin"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet (anfør hvilke)"
      }]
    }]
  }
}

```
