# Revision, indikation (DKR) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision, indikation (DKR)**

## ValueSet: Revision, indikation (DKR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionIndikationDKR | *Version*:2.14.0 |
| Active as of 2022-10-14 | *Computable Name*:RevisionIndikationDKR |

 
Revision, indikation (DKR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 14 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "RevisionIndikationDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionIndikationDKR",
  "version" : "2.14.0",
  "name" : "RevisionIndikationDKR",
  "title" : "Revision, indikation (DKR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-14T00:00:00+02:00",
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
  "description" : "Revision, indikation (DKR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionIndication",
        "concept" : [
          {
            "code" : "second_part_two_stage_revision",
            "display" : "2. del af 2-stadie revision"
          },
          {
            "code" : "aseptic_solution",
            "display" : "Aseptisk løsning"
          },
          {
            "code" : "pain",
            "display" : "Smerter uden løsning"
          },
          {
            "code" : "instability",
            "display" : "Instabilitet"
          },
          {
            "code" : "infection",
            "display" : "Dyb infektion (mikrobiologisk verificeret)"
          },
          {
            "code" : "suspected_infection",
            "display" : "Dyb infektion (mistænkt)"
          },
          {
            "code" : "secondary_insertion",
            "display" : "Sekundær isættelse af patellakomponent"
          },
          {
            "code" : "polyethylene_failure_patella",
            "display" : "Polyetylen-svigt patella"
          },
          {
            "code" : "polyethylene_failure_tibia",
            "display" : "Polyetylen-svigt tibia"
          },
          {
            "code" : "arthrosis_progression",
            "display" : "Progression af artrose"
          },
          {
            "code" : "periprosthetic_fracture",
            "display" : "Periprostetisk fraktur"
          },
          {
            "code" : "malplaced_component",
            "display" : "Malposition af komponenter"
          },
          {
            "code" : "constrained_mobility",
            "display" : "Indskrænket bevægelighed"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      }
    ]
  }
}

```
