# Patobank SNOMED DMPN Diagnose - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patobank SNOMED DMPN Diagnose**

## ValueSet: Patobank SNOMED DMPN Diagnose 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDDMPNDiagnose | *Version*:2.27.1 |
| Active as of 2022-07-14 | *Computable Name*:PatobankSNOMEDDMPNDiagnose |

 
DMPN diagnoser (Patobank SNOMED) 

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
  "id" : "PatobankSNOMEDDMPNDiagnose",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDDMPNDiagnose",
  "version" : "2.27.1",
  "name" : "PatobankSNOMEDDMPNDiagnose",
  "title" : "Patobank SNOMED DMPN Diagnose",
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
  "description" : "DMPN diagnoser (Patobank SNOMED)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
      "concept" : [{
        "code" : "M98753",
        "display" : "Kronisk myeloid leukæmi, BCR-ABL1 positiv (CML)"
      },
      {
        "code" : "M99453",
        "display" : "Kronisk myelomonocytær leukæmi (CMML)"
      },
      {
        "code" : "M99503",
        "display" : "Polycytæmia vera"
      },
      {
        "code" : "M99613",
        "display" : "Primær Myelofibrose"
      },
      {
        "code" : "M99623",
        "display" : "Essentiel trombocytæmi"
      },
      {
        "code" : "M99753",
        "display" : "Uklassificerbar myelodysplastisk/myeloproliferativ sygdom"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "prefibrotic",
        "display" : "Præfibrotisk Myelofibrose"
      }]
    }]
  }
}

```
