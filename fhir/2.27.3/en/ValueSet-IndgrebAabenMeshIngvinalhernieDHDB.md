# Indgreb, åben mesh - ingvinalhernie (DHDB) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb, åben mesh - ingvinalhernie (DHDB)**

## ValueSet: Indgreb, åben mesh - ingvinalhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebAabenMeshIngvinalhernieDHDB | *Version*:2.27.3 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebAabenMeshIngvinalhernieDHDB |

 
Indgreb, åben mesh - ingvinalhernie (DHDB) 

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
  "id" : "IndgrebAabenMeshIngvinalhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebAabenMeshIngvinalhernieDHDB",
  "version" : "2.27.3",
  "name" : "IndgrebAabenMeshIngvinalhernieDHDB",
  "title" : "Indgreb, åben mesh - ingvinalhernie (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Indgreb, åben mesh - ingvinalhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "plug",
        "display" : "Plug alene"
      },
      {
        "code" : "plug_plate",
        "display" : "Plug plus plade"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Øvrige åben mesh"
      }]
    }]
  }
}

```
