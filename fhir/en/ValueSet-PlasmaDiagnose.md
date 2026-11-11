# Plasma Analyse - kræft diagnose - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Plasma Analyse - kræft diagnose**

## ValueSet: Plasma Analyse - kræft diagnose 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PlasmaDiagnose | *Version*:2.27.2 |
| Active as of 2022-07-14 | *Computable Name*:PlasmaDiagnose |

 
Plasma analyse - kræft diagnose kriterier [DAMYDA] 

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
  "id" : "PlasmaDiagnose",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PlasmaDiagnose",
  "version" : "2.27.2",
  "name" : "PlasmaDiagnose",
  "title" : "Plasma Analyse - kræft diagnose",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Plasma analyse - kræft diagnose kriterier [DAMYDA]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "smouldering_mm",
        "display" : "Smouldering MM"
      },
      {
        "code" : "myelomatosis",
        "display" : "Myelomatose"
      },
      {
        "code" : "solitary_myelom_osseus",
        "display" : "Solitært myelom (ossøst)"
      },
      {
        "code" : "solitary_myelom_extra_osseus",
        "display" : "Solitært myelom (ekstraossøst)"
      },
      {
        "code" : "plasma_cell_leukemia",
        "display" : "Plasmacelleleukæmi"
      },
      {
        "code" : "DD472",
        "display" : "MGUS"
      },
      {
        "code" : "ZM973A3",
        "display" : "POEMS"
      },
      {
        "code" : "paraprotein_associated_polyneuropathy",
        "display" : "Paraproteinassocieret polyneuropati"
      }]
    }]
  }
}

```
