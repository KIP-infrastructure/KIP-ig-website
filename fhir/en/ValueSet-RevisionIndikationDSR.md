# Revision, indikation (DSR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision, indikation (DSR)**

## ValueSet: Revision, indikation (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionIndikationDSR | *Version*:2.27.2 |
| Active as of 2022-10-07 | *Computable Name*:RevisionIndikationDSR |

 
Revision, indikation (DSR) 

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
  "id" : "RevisionIndikationDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionIndikationDSR",
  "version" : "2.27.2",
  "name" : "RevisionIndikationDSR",
  "title" : "Revision, indikation (DSR)",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "Revision, indikation (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionIndication",
      "concept" : [{
        "code" : "aseptic_solution",
        "display" : "Aseptisk løsning"
      },
      {
        "code" : "suspected_infection",
        "display" : "Mistænkt eller manifest infektion"
      },
      {
        "code" : "instability",
        "display" : "Instabilitet"
      },
      {
        "code" : "dislocation",
        "display" : "Luksation"
      },
      {
        "code" : "rotator_cuff",
        "display" : "Rotator cuff ruptur / insufficiens"
      },
      {
        "code" : "cavitas_erosion",
        "display" : "Cavitas erosion"
      },
      {
        "code" : "prosthetic_joint_fracture",
        "display" : "Protesenær fraktur"
      },
      {
        "code" : "malplaced_component",
        "display" : "Malplaceret komponent"
      },
      {
        "code" : "implant_failure",
        "display" : "Implantat failure"
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
