# Mesh fiksering (DHDB) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh fiksering (DHDB)**

## ValueSet: Mesh fiksering (DHDB) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MeshFikseringDHDB | *Version*:2.14.0 |
| Active as of 2022-07-20 | *Computable Name*:MeshFikseringDHDB |

 
Mesh fiksering (DHDB) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 10 concepts

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
  "id" : "MeshFikseringDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MeshFikseringDHDB",
  "version" : "2.14.0",
  "name" : "MeshFikseringDHDB",
  "title" : "Mesh fiksering (DHDB)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Mesh fiksering (DHDB)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
        "concept" : [
          {
            "code" : "suture",
            "display" : "Sutur"
          },
          {
            "code" : "tack",
            "display" : "Tackers"
          },
          {
            "code" : "tack_sutur",
            "display" : "Tackers & sutur"
          },
          {
            "code" : "clip",
            "display" : "Clips"
          },
          {
            "code" : "surgical_glue",
            "display" : "Lim"
          },
          {
            "code" : "glue_sutur",
            "display" : "Lim & sutur"
          },
          {
            "code" : "glue_tack_clip",
            "display" : "Lim & tackers/clips"
          },
          {
            "code" : "self_fixative_mesh",
            "display" : "Selvfikserende mesh"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden fiksering"
          },
          {
            "code" : "none",
            "display" : "Ikke fixeret"
          }
        ]
      }
    ]
  }
}

```
