# Dansk national biobank - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dansk national biobank**

## ValueSet: Dansk national biobank 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BiobankSamples | *Version*:2.27.3 |
| Active as of 2022-06-29 | *Computable Name*:BiobankSamples |

 
Dansk national biobank - Samples og matrialer 

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
  "id" : "BiobankSamples",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BiobankSamples",
  "version" : "2.27.3",
  "name" : "BiobankSamples",
  "title" : "Dansk national biobank",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Dansk national biobank - Samples og matrialer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BiobankSamples",
      "concept" : [{
        "code" : "serum/plasma",
        "display" : "Serum / Plasma"
      },
      {
        "code" : "vital_frozen",
        "display" : "Mononukleære marvceller (Vitalfrosne)"
      },
      {
        "code" : "not_vital_frozen",
        "display" : "Mononukleære marvceller (Ikke Vitalfrosne)"
      },
      {
        "code" : "isolated",
        "display" : "Isolerede myelomceller"
      },
      {
        "code" : "marrow_cells",
        "display" : "Andre marvceller"
      },
      {
        "code" : "rna",
        "display" : "RNA"
      },
      {
        "code" : "dna",
        "display" : "DNA"
      },
      {
        "code" : "marrow_plasma",
        "display" : "Marvplasma"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
