# Sygdomsområder - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomsområder**

## CodeSystem: Sygdomsområder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Sygdomsomraader | *Version*:2.21.0 |
| Active as of 2023-05-10 | *Computable Name*:Sygdomsomraader |

 
Sygdomsområder i KIP 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SygdomsomraaderAlle](ValueSet-SygdomsomraaderAlle.md)
* [SygdomsomraaderDOF](ValueSet-SygdomsomraaderDOF.md)
* [SygdomsomraaderHaema](ValueSet-SygdomsomraaderHaema.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Sygdomsomraader",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Sygdomsomraader",
  "version" : "2.21.0",
  "name" : "Sygdomsomraader",
  "title" : "Sygdomsområder",
  "status" : "active",
  "date" : "2023-05-10T00:00:00+02:00",
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
  "description" : "Sygdomsområder i KIP",
  "content" : "complete",
  "count" : 27,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "ald",
    "display" : "ALD",
    "definition" : "Dansk Akut Leukæmi Database"
  },
  {
    "code" : "cll",
    "display" : "CLL",
    "definition" : "Dansk Kronisk Lymfatisk Leukæmi Database"
  },
  {
    "code" : "dad",
    "display" : "DAD",
    "definition" : "Dansk Anæstesi Database"
  },
  {
    "code" : "damyda",
    "display" : "DAMYDA",
    "definition" : "Dansk Myelomatose Database"
  },
  {
    "code" : "danaks",
    "display" : "DANAKS",
    "definition" : "Dansk Register for Akut Koronart Syndrom"
  },
  {
    "code" : "danarrest",
    "display" : "DANARREST ",
    "definition" : "DANARREST - Registrering af hjertestop på hospital"
  },
  {
    "code" : "dandem",
    "display" : "DANDEM",
    "definition" : "Dansk Klinisk Kvalitetsdatabase for Demens"
  },
  {
    "code" : "danstroke",
    "display" : "DANSTROKE",
    "definition" : "Dansk Stroke Register"
  },
  {
    "code" : "dccg",
    "display" : "DCCG",
    "definition" : "Dansk Kolorektal Cancer Database"
  },
  {
    "code" : "degc",
    "display" : "DEGC",
    "definition" : "Dansk EsophagoGastrisk Cancer Gruppe database"
  },
  {
    "code" : "dhd",
    "display" : "DHD",
    "definition" : "Dansk Hjertesvigts Database"
  },
  {
    "code" : "dhdb",
    "display" : "DHDB",
    "definition" : "Dansk Hernie Database"
  },
  {
    "code" : "dhr",
    "display" : "DHR",
    "definition" : "Dansk Hoftealloplastik Register"
  },
  {
    "code" : "dkr",
    "display" : "DKR",
    "definition" : "Dansk Knæalloplastik Register"
  },
  {
    "code" : "dkrr",
    "display" : "DKRR",
    "definition" : "Dansk Korsbåndsregister"
  },
  {
    "code" : "dmpn",
    "display" : "DMPN",
    "definition" : "Dansk Database for Kroniske Myeloproliferative Neoplasier"
  },
  {
    "code" : "dnsl",
    "display" : "DNSL",
    "definition" : "Dansk Nefrologisk Selskabs Landsregister"
  },
  {
    "code" : "dpd",
    "display" : "DPD",
    "definition" : "Dansk Palliativ Database"
  },
  {
    "code" : "dsr",
    "display" : "DSR",
    "definition" : "Dansk Skulderalloplastik Register"
  },
  {
    "code" : "dts",
    "display" : "DTS",
    "definition" : "Dansk Tarmkræftscreeningsdataabase"
  },
  {
    "code" : "duga",
    "display" : "DUGA",
    "definition" : "Dansk Urogynækologisk Database"
  },
  {
    "code" : "hofter",
    "display" : "HOFTER",
    "definition" : "Dansk Tværfagligt Register for Hoftenære Lårbensbrud"
  },
  {
    "code" : "kar",
    "display" : "KAR",
    "definition" : "Landsregistret Karbase"
  },
  {
    "code" : "lyfo",
    "display" : "LYFO",
    "definition" : "Dansk Lymfom Database"
  },
  {
    "code" : "mds",
    "display" : "MDS",
    "definition" : "Myelodysplastisk Neoplasi Database"
  },
  {
    "code" : "retspsyk",
    "display" : "RETSPSYK",
    "definition" : "Dansk Retspsykiatrisk Database"
  },
  {
    "code" : "hemgenix",
    "display" : "HEMGENIX",
    "definition" : "Amgros – Hemgenix, effektmål til kontrakt"
  }]
}

```
