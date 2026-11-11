# Mesh type - Ventralhernie (DHDB) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh type - Ventralhernie (DHDB)**

## ValueSet: Mesh type - Ventralhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MeshTypeVentralhernieDHDB | *Version*:2.27.2 |
| Active as of 2022-07-21 | *Computable Name*:MeshTypeVentralhernieDHDB |

 
Mesh type - Ventralhernie (DHDB) 

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
  "id" : "MeshTypeVentralhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MeshTypeVentralhernieDHDB",
  "version" : "2.27.2",
  "name" : "MeshTypeVentralhernieDHDB",
  "title" : "Mesh type - Ventralhernie (DHDB)",
  "status" : "active",
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "Mesh type - Ventralhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshType",
      "concept" : [{
        "code" : "adhesix_bard",
        "display" : "Adhesix, BARD"
      },
      {
        "code" : "bard_flatmesh",
        "display" : "BARD Flatmesh"
      },
      {
        "code" : "bio_a",
        "display" : "BIO-A"
      },
      {
        "code" : "cabs_air",
        "display" : "CABS AIR Composite, Cousin Biotech"
      },
      {
        "code" : "dynamesh_kebomed",
        "display" : "Dynamesh, Kebomed"
      },
      {
        "code" : "dynamesh_ipom",
        "display" : "Dynamesh IPOM, Kebomed"
      },
      {
        "code" : "galmesh_light",
        "display" : "Galmesh Light"
      },
      {
        "code" : "galmesh_umbilical",
        "display" : "Galmesh Umbilical"
      },
      {
        "code" : "gore_dualmesh",
        "display" : "Gore Dualmesh, ViCare Medical"
      },
      {
        "code" : "intramesh",
        "display" : "Intramesh (T1/P8/W3), Cousin Biotech"
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
        "code" : "parietene_composite",
        "display" : "Parietene Composite"
      },
      {
        "code" : "parietene_covidien",
        "display" : "Parietene Covidien"
      },
      {
        "code" : "parietex_ventral",
        "display" : "Parietex Ventral Patch"
      },
      {
        "code" : "parietex_covidien",
        "display" : "Parietex Covidien"
      },
      {
        "code" : "parietex_composite",
        "display" : "Parietex Composite (incl. Optimized), Covidien"
      },
      {
        "code" : "parietex_progrip",
        "display" : "Parietex Progrip, Covidien"
      },
      {
        "code" : "permacol_covidien",
        "display" : "Permacol, Covidien"
      },
      {
        "code" : "phasix",
        "display" : "Phasix"
      },
      {
        "code" : "phasix_st",
        "display" : "Phasix ST"
      },
      {
        "code" : "physiomesh_ethicon",
        "display" : "Physiomesh, Ethicon"
      },
      {
        "code" : "proceed_ventral",
        "display" : "Proceed Ventral Patch, Ethicon"
      },
      {
        "code" : "proceed_ehticon",
        "display" : "Proceed, Ethicon"
      },
      {
        "code" : "prolene",
        "display" : "Prolene"
      },
      {
        "code" : "softmesh_bard",
        "display" : "SoftMesh, BARD"
      },
      {
        "code" : "strattice_lifecell",
        "display" : "Strattice, Lifecell"
      },
      {
        "code" : "supromesh",
        "display" : "Supromesh"
      },
      {
        "code" : "symbotex_composite",
        "display" : "Symbotex Composite"
      },
      {
        "code" : "tigr",
        "display" : "TIGR"
      },
      {
        "code" : "ultrapro_ethicon",
        "display" : "Ultrapro, Ethicon"
      },
      {
        "code" : "ultrapro_advanced",
        "display" : "Ultrapro Advanced"
      },
      {
        "code" : "ventralex_st_bard",
        "display" : "Ventralex ST, BARD"
      },
      {
        "code" : "ventralight_st_bard",
        "display" : "Ventralight ST, BARD"
      },
      {
        "code" : "ventrio_hernia_st_bard",
        "display" : "Ventrio Hernia ST, BARD"
      },
      {
        "code" : "versatex",
        "display" : "Versatex"
      },
      {
        "code" : "vypro_ethicon",
        "display" : "Vypro, Ethicon"
      },
      {
        "code" : "xenmatrix",
        "display" : "Xenmatrix"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden mesh"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uoplyst"
      }]
    }]
  }
}

```
