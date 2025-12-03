# Revision; indication - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision; indication**

## CodeSystem: Revision; indication 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RevisionIndication | *Version*:2.15.0 |
| Active as of 2022-10-07 | *Computable Name*:RevisionIndication |

 
Revision; indication 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RevisionIndikationAseptiskDSR](ValueSet-RevisionIndikationAseptiskDSR.md)
* [RevisionIndikationDHR](ValueSet-RevisionIndikationDHR.md)
* [RevisionIndikationDKR](ValueSet-RevisionIndikationDKR.md)
* [RevisionIndikationDSR](ValueSet-RevisionIndikationDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RevisionIndication",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionIndication",
  "version" : "2.15.0",
  "name" : "RevisionIndication",
  "title" : "Revision; indication",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Revision; indication",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 31,
  "concept" : [
    {
      "code" : "aseptic_solution",
      "display" : "Aseptisk løsning",
      "definition" : "Aseptisk løsning",
      "concept" : [
        {
          "code" : "glenoid",
          "display" : "Glenoid",
          "definition" : "Glenoid"
        },
        {
          "code" : "humerus",
          "display" : "Humerus",
          "definition" : "Humerus"
        },
        {
          "code" : "acetabulum",
          "display" : "Acetabulum",
          "definition" : "Acetabulum"
        },
        {
          "code" : "acetabulum_osteolysis",
          "display" : "Acetabulum med osteolyse",
          "definition" : "Acetabulum med osteolyse"
        },
        {
          "code" : "femur",
          "display" : "Femur",
          "definition" : "Femur"
        },
        {
          "code" : "femur_osteolysis",
          "display" : "Femur med osteolyse",
          "definition" : "Femur med osteolyse"
        },
        {
          "code" : "femur_acetabulum",
          "display" : "Femur og acetabulum",
          "definition" : "Femur og acetabulum"
        },
        {
          "code" : "femur_acetabulum_osteolysis",
          "display" : "Femur og acetabulum med osteolyse",
          "definition" : "Femur og acetabulum med osteolyse"
        }
      ]
    },
    {
      "code" : "osteolysis",
      "display" : "Osteolyse",
      "definition" : "Osteolyse"
    },
    {
      "code" : "suspected_infection",
      "display" : "Mistænkt eller manifest infektion",
      "definition" : "Mistænkt eller manifest infektion"
    },
    {
      "code" : "infection",
      "display" : "Infection",
      "definition" : "Infection / Infektion"
    },
    {
      "code" : "instability",
      "display" : "Instabilitet",
      "definition" : "Instabilitet"
    },
    {
      "code" : "dislocation",
      "display" : "Luksation",
      "definition" : "Luksation"
    },
    {
      "code" : "rotator_cuff",
      "display" : "Rotator cuff ruptur / insufficiens",
      "definition" : "Rotator cuff ruptur / insufficiens"
    },
    {
      "code" : "cavitas_erosion",
      "display" : "Cavitas erosion",
      "definition" : "Cavitas erosion"
    },
    {
      "code" : "prosthetic_joint_fracture",
      "display" : "Protesenær fraktur",
      "definition" : "Protesenær fraktur"
    },
    {
      "code" : "periprosthetic_fracture",
      "display" : "Periprostetisk fraktur",
      "definition" : "Periprostetisk fraktur"
    },
    {
      "code" : "malplaced_component",
      "display" : "Malplaceret komponent",
      "definition" : "Malplaceret komponent"
    },
    {
      "code" : "component_failure",
      "display" : "Komponentsvigt",
      "definition" : "Komponentsvigt"
    },
    {
      "code" : "implant_failure",
      "display" : "Implantat failure",
      "definition" : "Implantat failure"
    },
    {
      "code" : "pain",
      "display" : "Pain",
      "definition" : "Pain / Smerter"
    },
    {
      "code" : "constrained_mobility",
      "display" : "Indskrænket bevægelighed",
      "definition" : "Indskrænket bevægelighed"
    },
    {
      "code" : "arthrosis_progression",
      "display" : "Athrosis progression",
      "definition" : "Athrosis progression / Artrose progression"
    },
    {
      "code" : "second_part_two_stage_revision",
      "display" : "2. del af 2-stadie revision",
      "definition" : "2. del af 2-stadie revision"
    },
    {
      "code" : "secondary_insertion",
      "display" : "Sekundær isættelse",
      "definition" : "Sekundær isættelse"
    },
    {
      "code" : "polyethylene_wear",
      "display" : "Polyethylenslitage",
      "definition" : "Polyethylenslitage"
    },
    {
      "code" : "polyethylene_failure",
      "display" : "Polyethylen-svigt",
      "definition" : "Polyethylen-svigt",
      "concept" : [
        {
          "code" : "polyethylene_failure_tibia",
          "display" : "Polyethylen-svigt (tibia)",
          "definition" : "Polyethylen-svigt (tibia)"
        },
        {
          "code" : "polyethylene_failure_patella",
          "display" : "Polyethylen-svigt (patella)",
          "definition" : "Polyethylen-svigt (patella)"
        }
      ]
    },
    {
      "code" : "femur_fracture",
      "display" : "Femurfraktur",
      "definition" : "Femurfraktur"
    }
  ]
}

```
