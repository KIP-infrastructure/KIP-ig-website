# Mesh type - Ingvinalhernie (DHDB) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh type - Ingvinalhernie (DHDB)**

## ValueSet: Mesh type - Ingvinalhernie (DHDB) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MeshTypeIngvinalhernieDHDB | *Version*:2.15.0 |
| Active as of 2022-07-20 | *Computable Name*:MeshTypeIngvinalhernieDHDB |

 
Mesh type - Ingvinalhernie (DHDB) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 36 concepts

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
  "id" : "MeshTypeIngvinalhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MeshTypeIngvinalhernieDHDB",
  "version" : "2.15.0",
  "name" : "MeshTypeIngvinalhernieDHDB",
  "title" : "Mesh type - Ingvinalhernie (DHDB)",
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
  "description" : "Mesh type - Ingvinalhernie (DHDB)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshType",
        "concept" : [
          {
            "code" : "adhesix",
            "display" : "Adhesix"
          },
          {
            "code" : "adhesix_lap",
            "display" : "Adhesix lap."
          },
          {
            "code" : "bard_3d",
            "display" : "BARD 3D"
          },
          {
            "code" : "bard_3d_light",
            "display" : "Bard 3D Light"
          },
          {
            "code" : "bard_perfix_plug",
            "display" : "BARD PerFix Plug"
          },
          {
            "code" : "bard_polysoft",
            "display" : "BARD PolySoft Hernia Patch"
          },
          {
            "code" : "bard_soft",
            "display" : "BARD Soft"
          },
          {
            "code" : "cousin",
            "display" : "Cousin"
          },
          {
            "code" : "dextile_medtronic",
            "display" : "Dextile fra Medtronic"
          },
          {
            "code" : "dynamesh_pp",
            "display" : "Dynamesh PP"
          },
          {
            "code" : "dynamesh_visible",
            "display" : "Dynamesh Visible"
          },
          {
            "code" : "galmesh",
            "display" : "Galmesh"
          },
          {
            "code" : "galmesh_light",
            "display" : "Galmesh Light"
          },
          {
            "code" : "klas",
            "display" : "Klas"
          },
          {
            "code" : "medcare_prolene",
            "display" : "Medcare Prolene"
          },
          {
            "code" : "optilene_mesh",
            "display" : "Optilene Mesh"
          },
          {
            "code" : "optilene_mesh_elastic",
            "display" : "Optilene Mesh Elastic"
          },
          {
            "code" : "optilene_mesh_lp",
            "display" : "Optilene Mesh LP"
          },
          {
            "code" : "parietene",
            "display" : "Parietene"
          },
          {
            "code" : "parietex",
            "display" : "Parietex"
          },
          {
            "code" : "parietex_progrip",
            "display" : "Parietex Progrip"
          },
          {
            "code" : "physiomesh",
            "display" : "Physiomesh"
          },
          {
            "code" : "polypropylene",
            "display" : "Polypropylene"
          },
          {
            "code" : "progrip",
            "display" : "Progrip"
          },
          {
            "code" : "prolene",
            "display" : "Prolene"
          },
          {
            "code" : "prolite",
            "display" : "Prolite"
          },
          {
            "code" : "supramesh",
            "display" : "Supramesh"
          },
          {
            "code" : "surgimesh",
            "display" : "Surgimesh"
          },
          {
            "code" : "surgipro",
            "display" : "Surgipro"
          },
          {
            "code" : "timesh",
            "display" : "TiMesh"
          },
          {
            "code" : "ultrapro",
            "display" : "Ultrapro"
          },
          {
            "code" : "ultrapro_advanced",
            "display" : "Ultrapro Advanced"
          },
          {
            "code" : "versatex_monofilament_mesh",
            "display" : "Versatex Monofilament Mesh"
          },
          {
            "code" : "vypro",
            "display" : "Vypro"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden mesh"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "UNK",
            "display" : "Uoplyst"
          }
        ]
      }
    ]
  }
}

```
