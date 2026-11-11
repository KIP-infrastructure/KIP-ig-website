# Manifeste komplikationer - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Manifeste komplikationer**

## ValueSet: Manifeste komplikationer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ComplicationsManifestation | *Version*:2.27.3 |
| Active as of 2022-07-14 | *Computable Name*:ComplicationsManifestation |

 
Manifeste komplikationer [DAMYDA] 

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
  "id" : "ComplicationsManifestation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ComplicationsManifestation",
  "version" : "2.27.3",
  "name" : "ComplicationsManifestation",
  "title" : "Manifeste komplikationer",
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
  "description" : "Manifeste komplikationer [DAMYDA]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "marrow_relapse",
        "display" : "Marv relaps"
      },
      {
        "code" : "rising_m_component",
        "display" : "Stigende M-komponent"
      },
      {
        "code" : "hypercalcemia",
        "display" : "Hypercalcæmi (klinisk betydende)"
      },
      {
        "code" : "osteolytic_foci",
        "display" : "Progression af osteolytiske foci"
      },
      {
        "code" : "medullary_cross_sectional_syndrome",
        "display" : "Medullært tværsnitssyndrom"
      },
      {
        "code" : "extremedullery_myeloma",
        "display" : "Ekstramedullære Myelomer"
      },
      {
        "code" : "plasma_cell_leukemia",
        "display" : "Plasmacelle leukæmi"
      },
      {
        "code" : "uremia_clinically",
        "display" : "Uræmi (klinisk betydende)"
      },
      {
        "code" : "uremia_dialysis",
        "display" : "Uræmi (kronisk dialysekrævende)"
      },
      {
        "code" : "amyloidosis",
        "display" : "Amyloidose"
      },
      {
        "code" : "neuropathy",
        "display" : "Neuropati"
      },
      {
        "code" : "hyperviscosity",
        "display" : "Hyperviskositet"
      }]
    }]
  }
}

```
