# Behandlingsplan (2025) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandlingsplan (2025)**

## ValueSet: Behandlingsplan (2025) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentRegimen-2025 | *Version*:2.27.1 |
| Active as of 2025-10-31 | *Computable Name*:TreatmentRegimen2025 |

 
Behandlingsplan som beskriver specifikke codsering og planlægningen af behandling 

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
  "id" : "TreatmentRegimen-2025",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentRegimen-2025",
  "version" : "2.27.1",
  "name" : "TreatmentRegimen2025",
  "title" : "Behandlingsplan (2025)",
  "status" : "active",
  "date" : "2025-10-31T00:00:00+02:00",
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
  "description" : "Behandlingsplan som beskriver specifikke codsering og planlægningen af behandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentRegimen",
      "concept" : [{
        "code" : "hdara_c",
        "display" : "HdAraC"
      },
      {
        "code" : "da31087",
        "display" : "DA inkl. 3+10, 3+8, 3+7"
      },
      {
        "code" : "da31087my",
        "display" : "DA inkl. 3+10, 3+8, 3+7 + mylotarg"
      },
      {
        "code" : "da31087mi",
        "display" : "DA inkl. 3+10, 3+8, 3+7 + midostaurin"
      },
      {
        "code" : "flagmito",
        "display" : "FLAG-Ida eller lign. inkl. FLAG, Mito-FLAG"
      },
      {
        "code" : "flagmitovene",
        "display" : "FLAG-Ida eller lign. inkl. FLAG, Mito-FLAG + venetoclax"
      },
      {
        "code" : "idarac",
        "display" : "IdAraC"
      },
      {
        "code" : "apl_mt",
        "display" : "APL vedligehold"
      },
      {
        "code" : "azacitidinmono",
        "display" : "Azacitidin monoterapi"
      },
      {
        "code" : "blinatumomab",
        "display" : "Blinatumunab"
      },
      {
        "code" : "vyxeos",
        "display" : "Vyxeos"
      },
      {
        "code" : "nopho_2008",
        "display" : "NOPHO 2008"
      },
      {
        "code" : "atoatra",
        "display" : "ATO+ATRA"
      },
      {
        "code" : "aida",
        "display" : "AIDA"
      },
      {
        "code" : "azacitidinvene",
        "display" : "Azacitidin-venetoclax"
      },
      {
        "code" : "toplusfem",
        "display" : "2+5 eller lign, eks. CT"
      },
      {
        "code" : "gilteritinib",
        "display" : "Gilteritinib"
      },
      {
        "code" : "midostaurin_ved",
        "display" : "Midostaurin vedligehold"
      },
      {
        "code" : "inotuzumab",
        "display" : "Inotuzumab ozogamicin"
      },
      {
        "code" : "all_ved",
        "display" : "ALL vedligehold"
      },
      {
        "code" : "hyper_cvad",
        "display" : "Hyper-CVAD"
      },
      {
        "code" : "alltogether_mt",
        "display" : "ALLtogether"
      },
      {
        "code" : "other_ikke",
        "display" : "Anden ikke-intensiv"
      },
      {
        "code" : "other_eks",
        "display" : "Anden eksperimentel"
      },
      {
        "code" : "other_semi",
        "display" : "Anden semiintensiv (f.eks. Plan B)"
      },
      {
        "code" : "other_int",
        "display" : "Anden intensiv (f.eks. BISHOP, Plan A)"
      }]
    }]
  }
}

```
