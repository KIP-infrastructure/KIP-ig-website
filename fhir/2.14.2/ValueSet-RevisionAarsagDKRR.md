# Revision, årsag (DKRR) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision, årsag (DKRR)**

## ValueSet: Revision, årsag (DKRR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionAarsagDKRR | *Version*:2.14.2 |
| Active as of 2022-09-21 | *Computable Name*:RevisionAarsagDKRR |

 
Revision, årsag (DKRR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 8 concepts

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
  "id" : "RevisionAarsagDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionAarsagDKRR",
  "version" : "2.14.2",
  "name" : "RevisionAarsagDKRR",
  "title" : "Revision, årsag (DKRR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-21T00:00:00+02:00",
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
  "description" : "Revision, årsag (DKRR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionCause",
        "concept" : [
          {
            "code" : "trauma",
            "display" : "Nyt traume"
          },
          {
            "code" : "tunnelwidening",
            "display" : "Tunnelwidening"
          },
          {
            "code" : "suboptimal_graft_tibia",
            "display" : "Suboptimal graft placering i tibia"
          },
          {
            "code" : "suboptimal_graft_femur",
            "display" : "Suboptimal graft placering i femur"
          },
          {
            "code" : "infection",
            "display" : "Infektion"
          },
          {
            "code" : "ligamental_instability",
            "display" : "Anden ligamentær løshed som årsag til ny instabilitet"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "UNK",
            "display" : "Ukendt årsag til ny instabilitet"
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
