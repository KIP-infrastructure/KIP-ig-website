# Mesh type - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh type**

## CodeSystem: Mesh type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MeshType | *Version*:2.15.0 |
| Active as of 2022-07-20 | *Computable Name*:MeshType |

 
Mesh type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MeshTypeIngvinalhernieDHDB](ValueSet-MeshTypeIngvinalhernieDHDB.md)
* [MeshTypeVentralhernieDHDB](ValueSet-MeshTypeVentralhernieDHDB.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MeshType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshType",
  "version" : "2.15.0",
  "name" : "MeshType",
  "title" : "Mesh type",
  "status" : "active",
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
  "description" : "Mesh type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 66,
  "concept" : [
    {
      "code" : "adhesix",
      "display" : "Adhesix",
      "definition" : "Adhesix"
    },
    {
      "code" : "adhesix_bard",
      "display" : "Adhesix, BARD",
      "definition" : "Adhesix, BARD"
    },
    {
      "code" : "adhesix_lap",
      "display" : "Adhesix lap.",
      "definition" : "Adhesix lap."
    },
    {
      "code" : "bard_3d",
      "display" : "BARD 3D",
      "definition" : "BARD 3D"
    },
    {
      "code" : "bard_3d_light",
      "display" : "Bard 3D Light",
      "definition" : "Bard 3D Light"
    },
    {
      "code" : "bard_flatmesh",
      "display" : "BARD Flatmesh",
      "definition" : "BARD Flatmesh"
    },
    {
      "code" : "bard_perfix_plug",
      "display" : "BARD PerFix Plug",
      "definition" : "BARD PerFix Plug"
    },
    {
      "code" : "bard_polysoft",
      "display" : "BARD PolySoft Hernia Patch",
      "definition" : "BARD PolySoft Hernia Patch"
    },
    {
      "code" : "bard_soft",
      "display" : "BARD Soft",
      "definition" : "BARD Soft"
    },
    {
      "code" : "bio_a",
      "display" : "BIO-A",
      "definition" : "BIO-A"
    },
    {
      "code" : "cabs_air",
      "display" : "CABS AIR Composite, Cousin Biotech",
      "definition" : "CABS AIR Composite, Cousin Biotech"
    },
    {
      "code" : "cousin",
      "display" : "Cousin",
      "definition" : "Cousin"
    },
    {
      "code" : "dextile_medtronic",
      "display" : "Dextile fra Medtronic",
      "definition" : "Dextile fra Medtronic"
    },
    {
      "code" : "dynamesh_kebomed",
      "display" : "Dynamesh, Kebomed",
      "definition" : "Dynamesh, Kebomed"
    },
    {
      "code" : "dynamesh_ipom",
      "display" : "Dynamesh IPOM, Kebomed",
      "definition" : "Dynamesh IPOM, Kebomed"
    },
    {
      "code" : "dynamesh_pp",
      "display" : "Dynamesh PP",
      "definition" : "Dynamesh PP"
    },
    {
      "code" : "dynamesh_visible",
      "display" : "Dynamesh Visible",
      "definition" : "Dynamesh Visible"
    },
    {
      "code" : "galmesh",
      "display" : "Galmesh",
      "definition" : "Galmesh"
    },
    {
      "code" : "galmesh_light",
      "display" : "Galmesh Light",
      "definition" : "Galmesh Light"
    },
    {
      "code" : "galmesh_umbilical",
      "display" : "Galmesh Umbilical",
      "definition" : "Galmesh Umbilical"
    },
    {
      "code" : "gore_dualmesh",
      "display" : "Gore Dualmesh, ViCare Medical",
      "definition" : "Gore Dualmesh, ViCare Medical"
    },
    {
      "code" : "intramesh",
      "display" : "Intramesh (T1/P8/W3), Cousin Biotech",
      "definition" : "Intramesh (T1/P8/W3), Cousin Biotech"
    },
    {
      "code" : "klas",
      "display" : "Klas",
      "definition" : "Klas"
    },
    {
      "code" : "medcare_prolene",
      "display" : "Medcare Prolene",
      "definition" : "Medcare Prolene"
    },
    {
      "code" : "optilene_mesh",
      "display" : "Optilene Mesh",
      "definition" : "Optilene Mesh"
    },
    {
      "code" : "optilene_mesh_elastic",
      "display" : "Optilene Mesh Elastic",
      "definition" : "Optilene Mesh Elastic"
    },
    {
      "code" : "optilene_mesh_lp",
      "display" : "Optilene Mesh LP",
      "definition" : "Optilene Mesh LP"
    },
    {
      "code" : "parietene",
      "display" : "Parietene",
      "definition" : "Parietene"
    },
    {
      "code" : "parietene_composite",
      "display" : "Parietene Composite",
      "definition" : "Parietene Composite"
    },
    {
      "code" : "parietene_covidien",
      "display" : "Parietene Covidien",
      "definition" : "Parietene Covidien"
    },
    {
      "code" : "parietex",
      "display" : "Parietex",
      "definition" : "Parietex"
    },
    {
      "code" : "parietex_composite",
      "display" : "Parietex Composite (incl. Optimized), Covidien",
      "definition" : "Parietex Composite (incl. Optimized), Covidien"
    },
    {
      "code" : "parietex_covidien",
      "display" : "Parietex Covidien",
      "definition" : "Parietex Covidien"
    },
    {
      "code" : "parietex_ventral",
      "display" : "Parietex Ventral Patch",
      "definition" : "Parietex Ventral Patch"
    },
    {
      "code" : "parietex_progrip",
      "display" : "Parietex Progrip",
      "definition" : "Parietex Progrip"
    },
    {
      "code" : "permacol_covidien",
      "display" : "Permacol, Covidien",
      "definition" : "Permacol, Covidien"
    },
    {
      "code" : "phasix",
      "display" : "Phasix",
      "definition" : "Phasix"
    },
    {
      "code" : "phasix_st",
      "display" : "Phasix ST",
      "definition" : "Phasix ST"
    },
    {
      "code" : "physiomesh",
      "display" : "Physiomesh",
      "definition" : "Physiomesh"
    },
    {
      "code" : "physiomesh_ethicon",
      "display" : "Physiomesh, Ethicon",
      "definition" : "Physiomesh, Ethicon"
    },
    {
      "code" : "polypropylene",
      "display" : "Polypropylene",
      "definition" : "Polypropylene"
    },
    {
      "code" : "proceed_ehticon",
      "display" : "Proceed, Ethicon",
      "definition" : "Proceed, Ethicon"
    },
    {
      "code" : "proceed_ventral",
      "display" : "Proceed Ventral Patch, Ethicon",
      "definition" : "Proceed Ventral Patch, Ethicon"
    },
    {
      "code" : "progrip",
      "display" : "Progrip",
      "definition" : "Progrip"
    },
    {
      "code" : "prolene",
      "display" : "Prolene",
      "definition" : "Prolene"
    },
    {
      "code" : "prolite",
      "display" : "Prolite",
      "definition" : "Prolite"
    },
    {
      "code" : "softmesh_bard",
      "display" : "SoftMesh, BARD",
      "definition" : "SoftMesh, BARD"
    },
    {
      "code" : "strattice_lifecell",
      "display" : "Strattice, Lifecell",
      "definition" : "Strattice, Lifecell"
    },
    {
      "code" : "supramesh",
      "display" : "Supramesh",
      "definition" : "Supramesh"
    },
    {
      "code" : "supromesh",
      "display" : "Supromesh",
      "definition" : "Supromesh"
    },
    {
      "code" : "surgimesh",
      "display" : "Surgimesh",
      "definition" : "Surgimesh"
    },
    {
      "code" : "surgipro",
      "display" : "Surgipro",
      "definition" : "Surgipro"
    },
    {
      "code" : "symbotex_composite",
      "display" : "Symbotex Composite",
      "definition" : "Symbotex Composite"
    },
    {
      "code" : "tigr",
      "display" : "TIGR",
      "definition" : "TIGR"
    },
    {
      "code" : "timesh",
      "display" : "TiMesh",
      "definition" : "TiMesh"
    },
    {
      "code" : "ultrapro",
      "display" : "Ultrapro",
      "definition" : "Ultrapro"
    },
    {
      "code" : "ultrapro_advanced",
      "display" : "Ultrapro Advanced",
      "definition" : "Ultrapro Advanced"
    },
    {
      "code" : "ultrapro_ethicon",
      "display" : "Ultrapro, Ethicon",
      "definition" : "Ultrapro, Ethicon"
    },
    {
      "code" : "ventralex_st_bard",
      "display" : "Ventralex ST, BARD",
      "definition" : "Ventralex ST, BARD"
    },
    {
      "code" : "ventralight_st_bard",
      "display" : "Ventralight ST, BARD",
      "definition" : "Ventralight ST, BARD"
    },
    {
      "code" : "ventrio_hernia_st_bard",
      "display" : "Ventrio Hernia ST, BARD",
      "definition" : "Ventrio Hernia ST, BARD"
    },
    {
      "code" : "versatex",
      "display" : "Versatex",
      "definition" : "Versatex"
    },
    {
      "code" : "versatex_monofilament_mesh",
      "display" : "Versatex Monofilament Mesh",
      "definition" : "Versatex Monofilament Mesh"
    },
    {
      "code" : "vypro",
      "display" : "Vypro",
      "definition" : "Vypro"
    },
    {
      "code" : "vypro_ethicon",
      "display" : "Vypro, Ethicon",
      "definition" : "Vypro, Ethicon"
    },
    {
      "code" : "xenmatrix",
      "display" : "Xenmatrix",
      "definition" : "Xenmatrix"
    }
  ]
}

```
