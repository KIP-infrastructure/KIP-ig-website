# Home - KIP Infrastructure v2.26.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ImplementationGuide/dk.kip.rkkp.fhir.ig.core | *Version*:2.26.0 |
| Active as of 2026-09-09 | *Computable Name*:KIPInfrastructure |

### Introduction

This implementation guide is provided to support the use of FHIR®© in the context of Sundhedsvæsenets Kvalitetsinstitut.



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "dk.kip.rkkp.fhir.ig.core",
  "url" : "https://kip.rkkp.dk/fhir/ImplementationGuide/dk.kip.rkkp.fhir.ig.core",
  "version" : "2.26.0",
  "name" : "KIPInfrastructure",
  "title" : "KIP Infrastructure",
  "status" : "active",
  "date" : "2026-09-09T13:48:46+00:00",
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
  "description" : "The Danish Sundhedsvæsenets Kvalitetsinstitut defines a set of FHIR CodeSystems and ValueSets used for data collection.",
  "packageId" : "dk.kip.rkkp.fhir.ig.core",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [{
    "id" : "hl7tx",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
    }],
    "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
    "packageId" : "hl7.terminology.r4",
    "version" : "7.3.0"
  },
  {
    "id" : "hl7ext",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
    }],
    "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
    "packageId" : "hl7.fhir.uv.extensions.r4",
    "version" : "5.3.0"
  },
  {
    "id" : "hl7_fhir_dk_core",
    "uri" : "http://hl7.dk/fhir/core/ImplementationGuide/hl7.fhir.dk.core",
    "packageId" : "hl7.fhir.dk.core",
    "version" : "2.0.0"
  }],
  "definition" : {
    "extension" : [{
      "extension" : [{
        "url" : "code",
        "valueString" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2022+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "release"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "show-inherited-invariants"
      },
      {
        "url" : "value",
        "valueString" : "false"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "usage-stats-opt-out"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "https://kip.rkkp.dk/fhir/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
      "valueCode" : "hl7.fhir.uv.tools.r4#1.1.2"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2022+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "release"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "show-inherited-invariants"
      },
      {
        "url" : "value",
        "valueString" : "false"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "usage-stats-opt-out"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "https://kip.rkkp.dk/fhir/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    }],
    "resource" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ALDkemoterapi.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ALDkemoterapi"
      },
      "name" : " ALD_Kemoterapi",
      "description" : "ALD kemoterapi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AcetabulumKnogletabKlassifikationDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AcetabulumKnogletabKlassifikationDHR"
      },
      "name" : "Acetabulum knogletab klassifikation (DHR)",
      "description" : "Acetabulum knogletab klassifikation (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ICHAction.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ICHAction"
      },
      "name" : "Action upon discovery of ICH",
      "description" : "Action upon discovery of ICH (Intracerebral haematoma)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ActivityType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ActivityType"
      },
      "name" : "Activity type",
      "description" : "Activity type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AdministrationTypeDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AdministrationTypeDCCG"
      },
      "name" : "Administrationstype Jern (DCCG)",
      "description" : "Administration af præoperativ jernbehandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AfdelingDandem.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AfdelingDandem"
      },
      "name" : "Afdelinger til DANDEM",
      "description" : "Afdelinger til DANDEM",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AflastendeProcedure.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AflastendeProcedure"
      },
      "name" : "Aflastende procedure DCCG",
      "description" : "Aflastende procedure DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AKBehandlingDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AKBehandlingDKR"
      },
      "name" : "AK Behandling (DKR)",
      "description" : "AK Behandling (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AKBehandling.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AKBehandling"
      },
      "name" : "AK Behandling (DKR)",
      "description" : "AK Behandling (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AktivitetDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AktivitetDKRR"
      },
      "name" : "Aktivitet (DKRR)",
      "description" : "Aktivitet (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AktivitetSportDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AktivitetSportDKRR"
      },
      "name" : "Aktivitet: Sport (DKRR)",
      "description" : "Aktivitet: Sport (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AktuelSygdomsforlob.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AktuelSygdomsforlob"
      },
      "name" : "Aktuel Sygdomsforløb",
      "description" : "Er patienten i det aktuelle sygdomsforløb",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AktuelSygdomsforlob.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AktuelSygdomsforlob"
      },
      "name" : "Aktuel Sygdomsforløb",
      "description" : "Er patienten i det aktuelle sygdomsforløb",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Alchohol.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Alchohol"
      },
      "name" : "Alchohol",
      "description" : "Healthfactor alchohol",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AlchoholDrugs.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AlchoholDrugs"
      },
      "name" : "Alchohol or drugs",
      "description" : "Alchohol or drugs",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Alkohol714.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Alkohol714"
      },
      "name" : "Alkohol - 7/14 genstande per uge",
      "description" : "Udfald for alkohol - 7/14 genstande per uge",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Alkohol0til10.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Alkohol0til10"
      },
      "name" : "Alkohol 0-10",
      "description" : "Udfald for alkohol",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Alkohol021.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Alkohol021"
      },
      "name" : "Alkohol 0-21",
      "description" : "0, 1-21 eller flere genstande per uge",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AlleMaaleEnheder.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AlleMaaleEnheder"
      },
      "name" : "Alle Måleenheder",
      "description" : "Alle måleenheder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AlloplastiktypeDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AlloplastiktypeDKR"
      },
      "name" : "Alloplastiktype (DKR)",
      "description" : "Alloplastiktype (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AlloplastyTypes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AlloplastyTypes"
      },
      "name" : "Alloplasty operation types",
      "description" : "Alloplasty operation types",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnastomoseLaekageGradingering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnastomoseLaekageGradingering"
      },
      "name" : "AnastomoseLaekage gradingering",
      "description" : "AnastomoseLaekage gradingering",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnastomoseLaekageGraduering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnastomoseLaekageGraduering"
      },
      "name" : "AnastomoseLaekage graduering",
      "description" : "AnastomoseLaekage graduering",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnastomoselaekageKonsekvens.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnastomoselaekageKonsekvens"
      },
      "name" : "Anastomoselaekage Konsekvens",
      "description" : "Anastomoselaekage Konsekvens",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Anastomoselaekage.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Anastomoselaekage"
      },
      "name" : "Anastomoselækage",
      "description" : "Anastomoselækage for operationen, og hvordan den er håndteret",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnastomoseType1.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnastomoseType1"
      },
      "name" : "Anastomosetype 1",
      "description" : "Anastomosetype 1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnastomoseType2.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnastomoseType2"
      },
      "name" : "Anastomosetype 2",
      "description" : "Anastomosetype 2",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnastomoseType3.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnastomoseType3"
      },
      "name" : "Anastomosetype 3",
      "description" : "Anastomosetype 3",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AnastomosisLeak.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AnastomosisLeak"
      },
      "name" : "Anastomosis leak",
      "description" : "Anastomosis Leak",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AnastomosisLeakConsequence.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AnastomosisLeakConsequence"
      },
      "name" : "Anastomosis leak consequence",
      "description" : "Anastomosis leak consequence",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AnastomosisLeakGrading.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AnastomosisLeakGrading"
      },
      "name" : "Anastomosis leak grading",
      "description" : "Anastomosis leak grading",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AnastomosisType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AnastomosisType"
      },
      "name" : "Anastomosis type",
      "description" : "Anastomosis type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnatomiskLokation1.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnatomiskLokation1"
      },
      "name" : "Anatomisk lokation 1",
      "description" : "Anatomisk lokation 1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnatomiskLokation2.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnatomiskLokation2"
      },
      "name" : "Anatomisk lokation 2",
      "description" : "Anatomisk lokation 2",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnatomiskLokation3.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnatomiskLokation3"
      },
      "name" : "Anatomisk lokation 3",
      "description" : "Anatomisk lokation 3",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnatomiskLokation4.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnatomiskLokation4"
      },
      "name" : "Anatomisk lokation 4",
      "description" : "Anatomisk lokation 4",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LokationAneurismeSAH.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LokationAneurismeSAH"
      },
      "name" : "Anatomisk lokation for anurisme [SAH]",
      "description" : "Anatomisk lokation for anurisme [SAH]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AnatomicalLocations.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AnatomicalLocations"
      },
      "name" : "Anatomy locations, not specified in classifcations (SKS, etc.)",
      "description" : "Anatomy locations, not specified in classifcations (SKS, etc.)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AndenBloedningDAP.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AndenBloedningDAP"
      },
      "name" : "Anden blødning (DAP)",
      "description" : "Anden blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AneurysmClosure.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AneurysmClosure"
      },
      "name" : "Aneurysm closure",
      "description" : "Aneurysm closure - Degree of closure",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AneurysmSizeScale.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AneurysmSizeScale"
      },
      "name" : "Aneurysm size scale (SAH)",
      "description" : "Aneurysm size scale (SAH)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnnArborStagingClassification.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnnArborStagingClassification"
      },
      "name" : "Ann Arbor gradering klassifikation",
      "description" : "Ann Arbor er en gradering klassifikation til Hodgkins desease",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AnnArborStagingClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AnnArborStagingClassification"
      },
      "name" : "Ann Arbor staging system",
      "description" : "Ann Arbor staging system; Link: https://radiopaedia.org/articles/ann-arbor-staging-system",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AntibiotikaMedUden.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AntibiotikaMedUden"
      },
      "name" : "Antibiotika (med/uden)",
      "description" : "Antibiotika (med/uden)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AntibiotikaprofylakseDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AntibiotikaprofylakseDHR"
      },
      "name" : "Antibiotikaprofylakse (DHR)",
      "description" : "Antibiotikaprofylakse (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AntibiotikaprofylakseDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AntibiotikaprofylakseDKRR"
      },
      "name" : "Antibiotikaprofylakse (DKRR)",
      "description" : "Antibiotikaprofylakse (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnurismeStoerrelseSAH.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnurismeStoerrelseSAH"
      },
      "name" : "Anurisme stoerrelse [SAH]",
      "description" : "Anurisme stoerrelse [SAH]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FISHSamples.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FISHSamples"
      },
      "name" : "Anvendte FISH prober",
      "description" : "Anvendte FISH prober",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FISHSamples202502.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FISHSamples202502"
      },
      "name" : "Anvendte FISH prober 202502",
      "description" : "Anvendte FISH prober 202502 - Fjernet udgået udfald og tilføjet nye",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnaestesiLokalGenerel.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnaestesiLokalGenerel"
      },
      "name" : "Anæstesi - Generel og lokal anæstesi",
      "description" : "Værdier for generel og lokal anæstesi.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnaestesiLokalGenerelSpinalEpidural.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnaestesiLokalGenerelSpinalEpidural"
      },
      "name" : "Anæstesi - Generel, lokal og spinal/epidural anæstesi",
      "description" : "Værdier for generel, lokal og spinal/epidural anæstesi.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnaestesiGenerelSpinalEpiduralLokalanalgesi.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnaestesiGenerelSpinalEpiduralLokalanalgesi"
      },
      "name" : "Anæstesi - Generel, lokalanalgesi og spinal/epidural anæstesi",
      "description" : "Værdier for generel, lokalanalgesi og spinal/epidural anæstesi.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnaestesiRegionalDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnaestesiRegionalDHR"
      },
      "name" : "Anæstesi - Regional [DHR]",
      "description" : "Anæstesi - Regional [DHR]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnaestesiRegionalUniverselKombineret.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnaestesiRegionalUniverselKombineret"
      },
      "name" : "Anæstesi - Regional, universel, kombineret",
      "description" : "Anæstesi - Regional, universel, kombineret",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ComplicationAN.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ComplicationAN"
      },
      "name" : "Anæstesi komplikationer",
      "description" : "Anæstesi komplikationer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ComplicationAN2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ComplicationAN2026"
      },
      "name" : "Anæstesi komplikationer 2026",
      "description" : "Anæstesi komplikationer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnasthesiaTypeGen.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnasthesiaTypeGen"
      },
      "name" : "Anæstesi Type Generel",
      "description" : "Generel Anæstesiydelse - Tillæg",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AnasthesiaTypeGen.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AnasthesiaTypeGen"
      },
      "name" : "Anæstesi Type Generel",
      "description" : "Generel Anæstesiydelse - Tillæg",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnaestesiDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnaestesiDUGA"
      },
      "name" : "Anæstesiform (DUGA)",
      "description" : "Anæstesiform (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnasthesiaService.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnasthesiaService"
      },
      "name" : "Anæstesiydelse",
      "description" : "Anæstesiydelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AnasthesiaService.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AnasthesiaService"
      },
      "name" : "Anæstesiydelse",
      "description" : "Anæstesiydelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnasthesiaService2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnasthesiaService2026"
      },
      "name" : "Anæstesiydelse 2026",
      "description" : "Anæstesiydelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnasthesiaServiceDAD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnasthesiaServiceDAD"
      },
      "name" : "Anæstesiydelse DAD",
      "description" : "Anæstesiydelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-APInstabilitetDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/APInstabilitetDKR"
      },
      "name" : "AP-instabilitet (DKR)",
      "description" : "AP-instabilitet (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ArtritisDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ArtritisDSR"
      },
      "name" : "Artritis (DSR)",
      "description" : "Artritis (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ArtrosePlaceringDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ArtrosePlaceringDKR"
      },
      "name" : "Artrose Placering (DKR)",
      "description" : "Artrose Placering (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ArtrosefoelgeDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ArtrosefoelgeDSR"
      },
      "name" : "Artrosefølge (DSR)",
      "description" : "Artrosefølge (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AsaIV.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AsaIV"
      },
      "name" : "ASA klassifikation I-V",
      "description" : "ASA klassifikation: De udvalgte koder for ASA fra I-V",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AsaIVkort.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AsaIVkort"
      },
      "name" : "ASA klassifikation I-V Kort",
      "description" : "ASA klassifikation: De udvalgte koder for ASA fra I-V i kort version",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ASAIVI.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ASAIVI"
      },
      "name" : "ASA klassifikation I-VI",
      "description" : "ASA klassifikation I-VI",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ASAIVIkort.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ASAIVIkort"
      },
      "name" : "ASA klassifikation I-VI Kort",
      "description" : "ASA klassifikation I-VI i kort version",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ASAClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ASAClassification"
      },
      "name" : "ASA Physical Status Classification System",
      "description" : "Score udviklet til vurdering af det fysiske helbred. Link: https://www.asahq.org/standards-and-guidelines/asa-physical-status-classification-system",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AssessmentType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AssessmentType"
      },
      "name" : "Assessment type",
      "description" : "Assessment type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-AssistDevices.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/AssistDevices"
      },
      "name" : "Assist devices",
      "description" : "Assist devices",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AssistDevicesBallonStent.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AssistDevicesBallonStent"
      },
      "name" : "Assist devices; Ballon og stent",
      "description" : "Assist devices; Ballon og stent",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCAntibiotikaprofylakseDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCAntibiotikaprofylakseDKR"
      },
      "name" : "ATC - Antibiotikaprofylakse (DKR)",
      "description" : "ATC - Antibiotikaprofylakse (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCAntibiotikaprofylakseDosisDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCAntibiotikaprofylakseDosisDKR"
      },
      "name" : "ATC - Antibiotikaprofylakse, dosis (DKR)",
      "description" : "ATC - Antibiotikaprofylakse, dosis (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCAntibiotikaprofylakseVarighedDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCAntibiotikaprofylakseVarighedDKR"
      },
      "name" : "ATC - Antibiotikaprofylakse, varighed (DKR)",
      "description" : "ATC - Antibiotikaprofylakse, varighed (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCTromboseprofylakseDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCTromboseprofylakseDKR"
      },
      "name" : "ATC - Tromboseprofylakse (DKR)",
      "description" : "ATC - Tromboseprofylakse (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCDMPN.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCDMPN"
      },
      "name" : "ATC DMPN",
      "description" : "ATC koder DMPN behandling. Erstattet af nyt VS fra okt. 2024",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCDMPN202410.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCDMPN202410"
      },
      "name" : "ATC DMPN 202410",
      "description" : "ATC koder DMPN behandling. Valueset erstatter tidligere fra okt. 2024",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCChemoPreparation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCChemoPreparation"
      },
      "name" : "ATC: Præparater for kemobehandling",
      "description" : "ATC koder for præparater for kemobehandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCImmunotherapyCLL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCImmunotherapyCLL"
      },
      "name" : "ATC_CLL_immunterapi",
      "description" : "ATC koder immunterapi - [CLL]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCChemoCLL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCChemoCLL"
      },
      "name" : "ATC_CLL_kemo",
      "description" : "ATC koder kemoterapi - [CLL]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ATCTargetCLL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ATCTargetCLL"
      },
      "name" : "ATC_CLL_target",
      "description" : "ATC koder targeteret behandling - [CLL]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BanffClassifikation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BanffClassifikation"
      },
      "name" : "Banff Classifikation",
      "description" : "Banff Classifikation(DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BANFF.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BANFF"
      },
      "name" : "Banff Classifikation",
      "description" : "Banff Classifikation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BasicDisorder.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BasicDisorder"
      },
      "name" : "Basic disorder",
      "description" : "Basic disorder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BegrundelseEndoskopiskLokalresektioen.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BegrundelseEndoskopiskLokalresektioen"
      },
      "name" : "Begrundelse for kun endoskopisk lokalresektion",
      "description" : "Begrundelse for kun endoskopisk lokalresektion",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingCML.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingCML"
      },
      "name" : "Behandling (CML)",
      "description" : "Behandling (CML)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingDHR"
      },
      "name" : "Behandling (DHR)",
      "description" : "Behandling (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentCrossSection.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentCrossSection"
      },
      "name" : "Behandling af tværsnit",
      "description" : "Hvilken type af tværsnit behandling blev valg",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BehandlingAfbrudt.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BehandlingAfbrudt"
      },
      "name" : "Behandling afbrudt/ophørt",
      "description" : "Årsager til behandling eller forløb er afbrudt/ophørt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingPsykofarmakologiskRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingPsykofarmakologiskRETSPSYK"
      },
      "name" : "Behandling: Psykofarmakologisk (RETSPSYK)",
      "description" : "Behandling: Psykofarmakologisk (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingEndovaskulaerType.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingEndovaskulaerType"
      },
      "name" : "Behandling; Endovaskulære behandlinger",
      "description" : "Behandling; Endovaskulære behandlinger",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingKirurgiskEndovaskulaer.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingKirurgiskEndovaskulaer"
      },
      "name" : "Behandling; kirurgisk og endovaskulær",
      "description" : "Behandling; kirurgisk og endovaskulær",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingTilstraekkelig.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingTilstraekkelig"
      },
      "name" : "Behandling; Udfald for at angive om det er en tilstrækkelig behandling",
      "description" : "Behandling; Udfald for at angive om det er en tilstrækkelig behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingCMMLMDS.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingCMMLMDS"
      },
      "name" : "Behandlinger foretaget i forbindelse med CMML (MDS)",
      "description" : "Behandlinger foretaget i forbindelse med CMML (MDS)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingMDS.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingMDS"
      },
      "name" : "Behandlinger foretaget i forbindelse med MDS (MDS)",
      "description" : "Behandlinger foretaget i forbindelse med MDS (MDS)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingsindikationKAR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingsindikationKAR"
      },
      "name" : "Behandlingsindikation (KAR)",
      "description" : "Behandlingsindikation (KAR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Behandlingsintention.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Behandlingsintention"
      },
      "name" : "Behandlingsintention",
      "description" : "Behandlingsintention",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentMethodMRD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentMethodMRD"
      },
      "name" : "Behandlingsmetode MRD",
      "description" : "Anvendt behandlingsmetode MRD [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentRegimen.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentRegimen"
      },
      "name" : "Behandlingsplan",
      "description" : "Behandlingsplan som beskriver specifikke codsering og planlægningen af behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentRegimen-2025.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentRegimen-2025"
      },
      "name" : "Behandlingsplan (2025)",
      "description" : "Behandlingsplan som beskriver specifikke codsering og planlægningen af behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingsresponsCML.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingsresponsCML"
      },
      "name" : "Behandlingsrespons CML",
      "description" : "Vurdering af behandlingsrespons CML",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingsTypeStamcellestoetteLYFO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingsTypeStamcellestoetteLYFO"
      },
      "name" : "Behandlingsttype - Stamcellestøtte (LYFO)",
      "description" : "Behandlingsttype - Stamcellestøtte (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentTypeOncology.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentTypeOncology"
      },
      "name" : "Behandlingstyper",
      "description" : "Hvilken behandlingstype blev der valgt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingsVarighedDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingsVarighedDHR"
      },
      "name" : "Behandlingsvarighed",
      "description" : "Behandlingsvarighed [DHR]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BenlaengdeDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BenlaengdeDHR"
      },
      "name" : "Benlængde (DHR)",
      "description" : "Benlængde (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BilateralUnilateral.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BilateralUnilateral"
      },
      "name" : "Bilateral / Unilateral",
      "description" : "Bilateral / Unilateral",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BinetStagingSystem.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BinetStagingSystem"
      },
      "name" : "Binet staging system for Chroniz Lymphocytic Leukemia",
      "description" : "Stages chronic lymphocytic leukemia, similar to Rai Staging System. *Nodal areas: cervical, axillary, inguinal (one side or both), spleen, and liver. Link: https://www.mdcalc.com/calc/10053/binet-staging-system-chronic-lymphocytic-leukemia-cll",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BinetStagingSystem.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BinetStagingSystem"
      },
      "name" : "BinetStagingSystem",
      "description" : "Binet staging system for Chroniz Lymphocytic Leukemia",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Birthplace.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Birthplace"
      },
      "name" : "Birthplace",
      "description" : "Birthplace",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BleedingStroke.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BleedingStroke"
      },
      "name" : "Bleeding - Stroke",
      "description" : "Bleeding - Stroke",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BlodfortyndendeMedicin.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BlodfortyndendeMedicin"
      },
      "name" : "Blodfortyndende medicin - Aktuelt brug",
      "description" : "Blodfortyndende medicin - Aktuelt brug",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HematologicalDiseases.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HematologicalDiseases"
      },
      "name" : "Blodsygdomme",
      "description" : "Blodsygdomme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BloedningsprofylakseDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BloedningsprofylakseDHR"
      },
      "name" : "Blødningsprofylakse (DHR)",
      "description" : "Blødningsprofylakse (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BoligforholdRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BoligforholdRETSPSYK"
      },
      "name" : "Boligforhold (RETSPSYK)",
      "description" : "Boligforhold (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Boligform.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Boligform"
      },
      "name" : "Boligform",
      "description" : "Patientens boligform",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BoligformDAP.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BoligformDAP"
      },
      "name" : "Boligform [DAP]",
      "description" : "Boligform for Apopleksi [DAP]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BoneLossAcetabulumFemurClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BoneLossAcetabulumFemurClassification"
      },
      "name" : "Bone loss - Acetabulum Femur Classification",
      "description" : "Walch classification; Link: https://radiopaedia.org/articles/walch-classification-of-glenoid-morphology-1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BrusklaesionArealDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BrusklaesionArealDKRR"
      },
      "name" : "Brusklæsion, areal (DKRR)",
      "description" : "Brusklæsion, areal (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BrusklaesionBehandlingDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BrusklaesionBehandlingDKRR"
      },
      "name" : "Brusklæsion, behandling (DKRR)",
      "description" : "Brusklæsion, behandling (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BulkingMaterialeDUGA.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BulkingMaterialeDUGA"
      },
      "name" : "Bulking materiale - Urogynækologi (DUGA)",
      "description" : "Bulking materiale - Urogynækologi (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BulkingMaterialeDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BulkingMaterialeDUGA"
      },
      "name" : "BulkingMateriale (DUGA)",
      "description" : "BulkingMateriale (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CalciumType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CalciumType"
      },
      "name" : "Calcium type",
      "description" : "Calcium type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CALRGeneType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CALRGeneType"
      },
      "name" : "CALR gene type",
      "description" : "CALR gene type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CALRvariant.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CALRvariant"
      },
      "name" : "CALR variant",
      "description" : "CALR variant",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CancerInvestigation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CancerInvestigation"
      },
      "name" : "Cancer investigation",
      "description" : "Udredning for cancerpatienter for cancerpatienter.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CancerUdredning.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CancerUdredning"
      },
      "name" : "Cancer udredning",
      "description" : "Valgmulighederne for cancer udredning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CancertypeDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CancertypeDCCG"
      },
      "name" : "Cancertype DCCG",
      "description" : "Cancertype DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CaputDiameterDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CaputDiameterDHR"
      },
      "name" : "Caput Diameter - (DHR)",
      "description" : "Caput Diameter - (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CaputModulaerTypeDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CaputModulaerTypeDHR"
      },
      "name" : "Caput modulær type - (DHR)",
      "description" : "Caput modulær type - (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CaputTypeDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CaputTypeDHR"
      },
      "name" : "Caput type - (DHR)",
      "description" : "Caput type - (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CaputnekroseDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CaputnekroseDSR"
      },
      "name" : "Caputnekrose (DSR)",
      "description" : "Caputnekrose (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-CarePlanReadOrWriteAccessSP.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/CarePlanReadOrWriteAccessSP"
      },
      "name" : "CarePlanReadOrWriteAccessSP",
      "description" : "Search a CarePlan for readAccess or writeAccess SOR code",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-CarePlanSorAuthor.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/CarePlanSorAuthor"
      },
      "name" : "CarePlanSorAuthor",
      "description" : "Search by SOR-code as author on a CarePlan",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CauseOfDeath.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CauseOfDeath"
      },
      "name" : "Cause of death",
      "description" : "Cause of death",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ReoperationCause.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ReoperationCause"
      },
      "name" : "Cause of reoperation",
      "description" : "Cause of reoperation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CementDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CementDKR"
      },
      "name" : "Cement (DKR)",
      "description" : "Cement (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CementFemurTibiaPatellaDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CementFemurTibiaPatellaDKR"
      },
      "name" : "Cement - femur, tibia og patella (DKR)",
      "description" : "Cement - femur, tibia og patella (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CementHofteDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CementHofteDHR"
      },
      "name" : "Cement - hofte (DHR)",
      "description" : "Cement - hofte (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CementBlandesystemDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CementBlandesystemDHR"
      },
      "name" : "Cement blandesystem (DHR)",
      "description" : "Cement blandesystem (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CementType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CementType"
      },
      "name" : "Cement type",
      "description" : "Cement type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CentralBlock.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CentralBlock"
      },
      "name" : "Central blokade",
      "description" : "Tidspunkt for central blokade",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ScoreCentralBlock.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ScoreCentralBlock"
      },
      "name" : "Central blokade score",
      "description" : "Regional score ved central nerveblokade",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ChemotherapyRegimen.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ChemotherapyRegimen"
      },
      "name" : "Chemotherapy regimen",
      "description" : "Chemotherapy regimen",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ChromosomPair.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ChromosomPair"
      },
      "name" : "Chromosom pair",
      "description" : "Chromosom pair",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CivilstandDAP.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CivilstandDAP"
      },
      "name" : "Civilstand [DAP]",
      "description" : "Civilstand for Apopleksi [DAP]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CivilstatusRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CivilstatusRETSPSYK"
      },
      "name" : "Civilstatus (RETSPSYK)",
      "description" : "Civilstatus (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ClavienKomplikationsgrad.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ClavienKomplikationsgrad"
      },
      "name" : "Clavien komplikationsgrad",
      "description" : "Clavien komplikationsgrad",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ClavienKomplikationsgradDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ClavienKomplikationsgradDCCG"
      },
      "name" : "Clavien komplikationsgrad DCCG",
      "description" : "Clavien komplikationsgrad DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ClavienKomplikationsgradLangDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ClavienKomplikationsgradLangDCCG"
      },
      "name" : "Clavien komplikationsgrad lang DCCG",
      "description" : "Clavien komplikationsgrad lang DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ClinicalProtocolNotParticipated.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ClinicalProtocolNotParticipated"
      },
      "name" : "Clinical protocol - patient did not participated; cause",
      "description" : "Clinical protocol -  patient did not participated; cause",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ClinicalProtocolCodes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ClinicalProtocolCodes"
      },
      "name" : "Clinical protocol; name",
      "description" : "Clinical protocol; name",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CognitiveFunctionFinding.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CognitiveFunctionFinding"
      },
      "name" : "Cognitive function finding",
      "description" : "Cognitive function finding / SNOMED-CT: 373930000",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CognitiveTest.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CognitiveTest"
      },
      "name" : "Cognitive test",
      "description" : "Cognitive test",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Complications.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Complications"
      },
      "name" : "Complications",
      "description" : "Complications - several procedures",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ConferenceParticipants.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ConferenceParticipants"
      },
      "name" : "Conference Participants",
      "description" : "Deltagende faggrupper",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ContactPlace.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ContactPlace"
      },
      "name" : "Contact; Place of contact",
      "description" : "Contact; Place of contact",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ContaminationDegree.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ContaminationDegree"
      },
      "name" : "Contamination degree",
      "description" : "Contamination degree",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-CprPatient.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/CprPatient"
      },
      "name" : "CprPatient",
      "description" : "Search by CPR in Patient",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BloodThinnersTreatment.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BloodThinnersTreatment"
      },
      "name" : "Current treatment (if any) of medical blood thinners",
      "description" : "Current treatment (if any) of medical blood thinners",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Cyclus.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Cyclus"
      },
      "name" : "Cyclus",
      "description" : "Cyclus længde",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Cyclus.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Cyclus"
      },
      "name" : "Cyclus længde",
      "description" : "Cyclus længde",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CytogeneticChanges.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CytogeneticChanges"
      },
      "name" : "Cytogenetic changes",
      "description" : "Cytogenetic changes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticExamination.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticExamination"
      },
      "name" : "Cytogenetic Examination",
      "description" : "Hvilke cytogenetiske forandringer er undersøgt - DMPN",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CytogeneticExamination.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CytogeneticExamination"
      },
      "name" : "Cytogenetic examination",
      "description" : "Examination; cytogenetic examination",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticResult.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticResult"
      },
      "name" : "Cytogenetic resultater",
      "description" : "Cytogenetiske positive fund - DMPN. Valueset erstattes af nyt fra Okt. 2024",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticResult202410.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticResult202410"
      },
      "name" : "Cytogenetic resultater 202410",
      "description" : "Cytogenetiske positive fund - DMPN. Valueset erstatter tidligere pr. Okt. 2024",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticRiskGrimwade2010.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticRiskGrimwade2010"
      },
      "name" : "Cytogenetisk risiki Grimwade 2010",
      "description" : "Cytogenetiske risiko vurdering i henhold til Grimwade 2010 kriterier",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticRiskGrimwade2010DAMYDA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticRiskGrimwade2010DAMYDA"
      },
      "name" : "Cytogenetisk risiki Grimwade 2010 [DAMYDA]",
      "description" : "Cytogenetiske risiko vurdering i henhold til Grimwade 2010 kriterier [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticChanges.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticChanges"
      },
      "name" : "Cytogenetiske forandringer",
      "description" : "Cytogenetiske forandringer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticCancerChangesALD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticCancerChangesALD"
      },
      "name" : "Cytogenetiske kræft forandringer",
      "description" : "Cytogenetiske WHO specifikke recurrente forandringer i forhold til kræft [ALD]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticRisk.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticRisk"
      },
      "name" : "Cytogenetiske risici",
      "description" : "Cytogenetiske fund / risiko vudering",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Cytopeni.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Cytopeni"
      },
      "name" : "Cytopeni",
      "description" : "Cytopeni",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BiobankSamples.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BiobankSamples"
      },
      "name" : "Danish National Biobank - Samples/materials",
      "description" : "Danish National Biobank - Samples/materials",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BiobankSamples.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BiobankSamples"
      },
      "name" : "Dansk national biobank",
      "description" : "Dansk national biobank - Samples og matrialer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DatabasesKIP.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DatabasesKIP"
      },
      "name" : "Databaser - KIP",
      "description" : "Databaser i KIP",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DatabasesHAEMA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DatabasesHAEMA"
      },
      "name" : "Databaser i HÆMA",
      "description" : "Databaser i HÆMA",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DefibrilleringAnalyse.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DefibrilleringAnalyse"
      },
      "name" : "Defibrillering_Analyse",
      "description" : "Metode til analyse/defibrillering af hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DegcMDTBeslutning.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DegcMDTBeslutning"
      },
      "name" : "DEGC MDT beslutning",
      "description" : "DEGC MDT beslutning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DeleFoelelser.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DeleFoelelser"
      },
      "name" : "Dele følelser",
      "description" : "Dele følelser",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-PatobankSNOMED.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/PatobankSNOMED"
      },
      "name" : "Den Danske SNOMED for Patologi",
      "description" : "Den Danske SNOMED for Patologi - Udvalgte koder i RKKP. Link: https://www.patobank.dk/snomed/",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DetectionMethodCR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DetectionMethodCR"
      },
      "name" : "Detection Method C/R",
      "description" : "Detection Method Clinical/Radiological",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DetectionMethods.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DetectionMethods"
      },
      "name" : "Detection methods",
      "description" : "Detection methods (vasospasms etc.)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DHDeksklusionskriterie.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DHDeksklusionskriterie"
      },
      "name" : "DHD eksklusionskriterie",
      "description" : "Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DHDeksklusionskriterie.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DHDeksklusionskriterie"
      },
      "name" : "DHD eksklusionskriterier",
      "description" : "Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DiagnoseCLL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DiagnoseCLL"
      },
      "name" : "Diagnose (CLL)",
      "description" : "Diagnose (CLL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DiagnoseDANDEM.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DiagnoseDANDEM"
      },
      "name" : "Diagnose (DANDEM)",
      "description" : "Diagnose (DANDEM)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DiagnoseDMPN.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DiagnoseDMPN"
      },
      "name" : "Diagnose DMPN",
      "description" : "Uspecificerede diagnoser - DMPN",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DiagnoseDMPNopfoelgning.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DiagnoseDMPNopfoelgning"
      },
      "name" : "Diagnose DMPN opfølgning",
      "description" : "Uspecificerede diagnoser - DMPN opfølgning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DiagnosegruppeHAEMA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DiagnosegruppeHAEMA"
      },
      "name" : "Diagnosegruppe (HAEMA)",
      "description" : "Diagnosegruppe (HAEMA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DiagnosetypeDPD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DiagnosetypeDPD"
      },
      "name" : "Diagnosetype - DPD",
      "description" : "Diagnosetype - DPD",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Dialyseadgang.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Dialyseadgang"
      },
      "name" : "Dialyseadgang",
      "description" : "Dialyseadgang",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DialyseadgangDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DialyseadgangDNSL"
      },
      "name" : "Dialyseadgang ved første dialyse (DNSL)",
      "description" : "Dialyseadgang ved første dialyse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DialyseOpstartDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DialyseOpstartDNSL"
      },
      "name" : "Dialyseopstart (DNSL)",
      "description" : "Dialyseopstart ved første dialyse (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DiseaseLocalization.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DiseaseLocalization"
      },
      "name" : "Disease localization",
      "description" : "Disease localization",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DiseasePhase.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DiseasePhase"
      },
      "name" : "Disease phase",
      "description" : "Disease phase",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Sygdomsfase.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Sygdomsfase"
      },
      "name" : "Disease Stage",
      "description" : "Sygdomsfase",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DiseasesUnspecified.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DiseasesUnspecified"
      },
      "name" : "Diseases - Unspecified without a code",
      "description" : "Diseases - Unspecified without a code",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-plan-definition-action-display-order.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/plan-definition-action-display-order"
      },
      "name" : "Display Order for PlanDefinition Action",
      "description" : "Specifies the desired display order of a PlanDefinition action (e.g. Questionnaire references). Lower values are displayed first.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DoedLokation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DoedLokation"
      },
      "name" : "Doed lokation",
      "description" : "Hvor døde patienten",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DoedsaarsagCLL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DoedsaarsagCLL"
      },
      "name" : "Doedsaarsag [CLL]",
      "description" : "Dødsårsag [CLL]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomAfslutningRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomAfslutningRETSPSYK"
      },
      "name" : "Dom - Afslutning (RETSPSYK)",
      "description" : "Dom - Afslutning (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomAnbefalingRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomAnbefalingRETSPSYK"
      },
      "name" : "Dom - Anbefaling (RETSPSYK)",
      "description" : "Dom - Anbefaling (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomAnbringelseRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomAnbringelseRETSPSYK"
      },
      "name" : "Dom - Anbringelse (RETSPSYK)",
      "description" : "Dom - Anbringelse (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomBehandlingRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomBehandlingRETSPSYK"
      },
      "name" : "Dom - Behandling (RETSPSYK)",
      "description" : "Dom - Behandling (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomBehandlingAmbulantRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomBehandlingAmbulantRETSPSYK"
      },
      "name" : "Dom - Behandling, ambulant (RETSPSYK)",
      "description" : "Dom - Behandling, ambulant (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomForanstaltningstypeRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomForanstaltningstypeRETSPSYK"
      },
      "name" : "Dom - Foranstaltningstype (RETSPSYK)",
      "description" : "Dom - Foranstaltningstype (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomOphaevelseAarsagRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomOphaevelseAarsagRETSPSYK"
      },
      "name" : "Dom - Ophævelse, årsag (RETSPSYK)",
      "description" : "Dom - Ophævelse, årsag (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomPauseringAarsagRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomPauseringAarsagRETSPSYK"
      },
      "name" : "Dom - Pausering, årsag (RETSPSYK)",
      "description" : "Dom - Pausering, årsag (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomTidligereRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomTidligereRETSPSYK"
      },
      "name" : "Dom - Tidligere (RETSPSYK)",
      "description" : "Dom - Tidligere (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DomAendringPauseringRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DomAendringPauseringRETSPSYK"
      },
      "name" : "Dom - Ændring/pausering (RETSPSYK)",
      "description" : "Dom - Ændring/pausering (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Dosis.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Dosis"
      },
      "name" : "Dosis",
      "description" : "Dosis i givne mængder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DosisAKbehDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DosisAKbehDKR"
      },
      "name" : "Dosis AK behandling (DKR)",
      "description" : "Døgndosis AK behandling (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DVTProfylakseDosisDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DVTProfylakseDosisDKRR"
      },
      "name" : "DVT profylakse, dosis (DKRR)",
      "description" : "DVT profylakse, dosis (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DoedsaarsagLYFO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DoedsaarsagLYFO"
      },
      "name" : "Dødsårsag (LYFO)",
      "description" : "Dødsårsag (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DoedsaarsagALD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DoedsaarsagALD"
      },
      "name" : "Dødsårsager [ALD]",
      "description" : "Dødsårsager [ALD]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DoedsaarsagDAMYDA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DoedsaarsagDAMYDA"
      },
      "name" : "Dødsårsager [DAMYDA]",
      "description" : "Dødsårsager [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DoedsaarsagSAH.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DoedsaarsagSAH"
      },
      "name" : "Dødsårsager [SAH]",
      "description" : "Dødsårsager [SAH]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ECOG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ECOG"
      },
      "name" : "ECOG Performance Status Scale",
      "description" : "Valueset for ECOG skalaen",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ECOGHAEMA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ECOGHAEMA"
      },
      "name" : "ECOG Performance Status Skala til HÆMA specialerne",
      "description" : "Denne ECOG er specifik udarbejdet til HÆMA specialerne",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EconomicSupport.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EconomicSupport"
      },
      "name" : "Economic support",
      "description" : "Economic support",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EdemaStroke.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EdemaStroke"
      },
      "name" : "Edema (brain) - Stroke",
      "description" : "Edema (brain) - Stroke",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EDTACodes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EDTACodes"
      },
      "name" : "EDTA koder (DNSL)",
      "description" : "EDTA koder (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EDTAHaemodialyseDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EDTAHaemodialyseDNSL"
      },
      "name" : "EDTA koder Hæmodialyse (DNSL)",
      "description" : "EDTA koder Hæmodialyse (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EDTAPeritonedialyseDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EDTAPeritonedialyseDNSL"
      },
      "name" : "EDTA koder Peritonedialyse (DNSL)",
      "description" : "EDTA koder Peritonedialyse (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EDTATransplantationDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EDTATransplantationDNSL"
      },
      "name" : "EDTA koder Transplantation (DNSL)",
      "description" : "EDTA koder Transplantation (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EducationType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EducationType"
      },
      "name" : "Education Type",
      "description" : "Education Type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EHSIncisionalHerniaClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EHSIncisionalHerniaClassification"
      },
      "name" : "EHS - Incisional hernia classification",
      "description" : "EHS (European Hernia Society) - Incisional hernia classification; Link: https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2719726/",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EHSIncisionalHerniaClassificationType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EHSIncisionalHerniaClassificationType"
      },
      "name" : "EHS - Incisional hernia classification type",
      "description" : "EHS (European Hernia Society) - Incisional hernia classification type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EHSVentralHernieLateral.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EHSVentralHernieLateral"
      },
      "name" : "EHS ventral hernie - lateral",
      "description" : "EHS ventral hernie - lateral",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EHSVentralHernieMidtlinie.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EHSVentralHernieMidtlinie"
      },
      "name" : "EHS ventral hernie - midtlinie",
      "description" : "EHS ventral hernie - midtlinie",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EHSVentralHernieSamlet.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EHSVentralHernieSamlet"
      },
      "name" : "EHS ventral hernie - samlet",
      "description" : "EHS ventral hernie - lateral fordelt på højre/venstre og kombineret med midtlinje",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EHSVentralHernieType.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EHSVentralHernieType"
      },
      "name" : "EHS ventral hernie type",
      "description" : "EHS ventral hernie type - lateral højre/venstre og midtlinje",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ExtraordinaryTreatmenCause.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ExtraordinaryTreatmenCause"
      },
      "name" : "Ekstra behandling",
      "description" : "Årsag for uplanlagt ekstra behandling [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKSExtraModularDisease.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKSExtraModularDisease"
      },
      "name" : "Ekstramedullær sygdom",
      "description" : "Ekstramedullær sygdom",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EndoscopicAppearance.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EndoscopicAppearance"
      },
      "name" : "Endoscopic appearance",
      "description" : "Endoscopic appearance",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EORTC14DPD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EORTC14DPD"
      },
      "name" : "EORTC Grad 1-4 (DPD)",
      "description" : "EORTC Grad 1-4 - Helbredsvurdering (DPD)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EORTC17DPD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EORTC17DPD"
      },
      "name" : "EORTC Grad 1-7 (DPD)",
      "description" : "EORTC Grad 1-7 - Livskvalitetssvurdering (DPD)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EORTC17DUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EORTC17DUGA"
      },
      "name" : "EORTC Grad 1-7 (DUGA)",
      "description" : "EORTC Grad 1-7 - Livskvalitetssvurdering (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EORTC24DPD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EORTC24DPD"
      },
      "name" : "EORTC Grad 2-4 (DPD)",
      "description" : "EORTC Grad 2-4 - Helbredsvurdering (DPD)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EORTCQLQC1514.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EORTCQLQC1514"
      },
      "name" : "EORTC QLQ-C15-PAL 1-4",
      "description" : "EORTC Palliativ spørgeskema (1-15) grad 1-4. Se https://www.eortc.org/research_field/quality-of-life/",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EORTCQLQC1517.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EORTCQLQC1517"
      },
      "name" : "EORTC QLQ-C15-PAL G1-7",
      "description" : "EORTC Palliativ spørgeskema (1-15) grad 1-7. Se https://www.eortc.org/research_field/quality-of-life/",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ManglendeEORTC.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ManglendeEORTC"
      },
      "name" : "EORTC skema mangler",
      "description" : "Årsag til manglende EORTC skema",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PRDcodes.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PRDcodes"
      },
      "name" : "ERA PRD Codes",
      "description" : "European Renal Association (ERA)  Primary Renal Disease (PRD)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-PRDcodes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/PRDcodes"
      },
      "name" : "ERA PRD Codes",
      "description" : "European Renal Association (ERA)  Primary Renal Disease (PRD)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ErklaeringRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ErklaeringRETSPSYK"
      },
      "name" : "Erklæring (RETSPSYK)",
      "description" : "Erklæring (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Faggruppe.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Faggruppe"
      },
      "name" : "Faggruppe",
      "description" : "Hvilken faggruppe er involveret i en given hændelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Faggruppe.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Faggruppe"
      },
      "name" : "Faggruppe",
      "description" : "Faggruppe involveret i hændelser",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Competence.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Competence"
      },
      "name" : "Fagligt niveau",
      "description" : "Udførende personales faglighed",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Competence.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Competence"
      },
      "name" : "FagligtNiveau - DAD",
      "description" : "Fagligt niveau for udførende anæstesi personale",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FemurKnogletabKlassifikationDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FemurKnogletabKlassifikationDHR"
      },
      "name" : "Femur knogletab klassifikation (DHR)",
      "description" : "Femur knogletab klassifikation (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FiksationCementeretUcementeret.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FiksationCementeretUcementeret"
      },
      "name" : "Fiksation - cementeret/ucementeret",
      "description" : "Fiksation - cementeret/ucementeret",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FiksationCementeretUcementeretAndet.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FiksationCementeretUcementeretAndet"
      },
      "name" : "Fiksation - cementeret/ucementeret/andet",
      "description" : "Fiksation - cementeret/ucementeret/andet",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FiksationCementeretUcementeretHybrid.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FiksationCementeretUcementeretHybrid"
      },
      "name" : "Fiksation - cementeret/ucementeret/hybrid",
      "description" : "Fiksation - cementeret/ucementeret/hybrid",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FiksationFemurDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FiksationFemurDKRR"
      },
      "name" : "Fiksation, Femur (DKRR)",
      "description" : "Fiksation, Femur (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FiksationFemurDKRR202503.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FiksationFemurDKRR202503"
      },
      "name" : "Fiksation, Femur (DKRR) 2025",
      "description" : "Fiksation, Femur (DKRR) 2025 rettelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FiksationTibiaDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FiksationTibiaDKRR"
      },
      "name" : "Fiksation, Tibia (DKRR)",
      "description" : "Fiksation, Tibia (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DSAFindingsLocation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DSAFindingsLocation"
      },
      "name" : "Findings with digital subtraction angiography (DSA); location of clot",
      "description" : "Findings with digital subtraction angiography (DSA); location of clot",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FISHProcedure.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FISHProcedure"
      },
      "name" : "FISH plasma identifikation",
      "description" : "FISH plasma identifikation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-FISHVariables.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/FISHVariables"
      },
      "name" : "FISH variables; test",
      "description" : "FISH variables; test",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FisherGrad.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FisherGrad"
      },
      "name" : "Fisher grad for SAH",
      "description" : "Fisher grad for SAH",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-FisherGradingScale.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/FisherGradingScale"
      },
      "name" : "Fisher grading scale",
      "description" : "Fisher grading scale; Link: https://radiopaedia.org/articles/fisher-scale",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-FixationCruciateLigaments.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/FixationCruciateLigaments"
      },
      "name" : "Fixation for cruciate ligaments (femur and tibia); types of screws",
      "description" : "Fixation for cruciate ligaments (femur and tibia), types of screws",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KontaktType1.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KontaktType1"
      },
      "name" : "Foerste kontakt",
      "description" : "Første kontakt type til behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KontaktSted.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KontaktSted"
      },
      "name" : "Foerste kontakt sted",
      "description" : "Sted for første kontakt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KontaktSted2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KontaktSted2026"
      },
      "name" : "Foerste kontakt sted 2026",
      "description" : "Sted for første kontakt 2026",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ForsoergelsesgrundlagRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ForsoergelsesgrundlagRETSPSYK"
      },
      "name" : "Forsørgelsesgrundlag (RETSPSYK)",
      "description" : "Forsørgelsesgrundlag (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FrakturFriskhedDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FrakturFriskhedDSR"
      },
      "name" : "Fraktur; friskhed (DSR)",
      "description" : "Fraktur; friskhed (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AKFravalgt.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AKFravalgt"
      },
      "name" : "Fravalg af antikoagulationsbehandling; årsag",
      "description" : "Årsagen til hvorfor antikoagulationsbehandling er fravalgt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Frekvens.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Frekvens"
      },
      "name" : "Frekvens",
      "description" : "Frekvens for hvor ofte en given hændelse optræder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FrekvensLaekDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FrekvensLaekDUGA"
      },
      "name" : "Frekvens læk (DUGA)",
      "description" : "Hvor ofte lækkes urin (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FrekvensNedsynkningDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FrekvensNedsynkningDUGA"
      },
      "name" : "Frekvens Nedsynkning (DUGA)",
      "description" : "Hvor ofte konstateres nedsynkning (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-FunctionGroupAlloplasty.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/FunctionGroupAlloplasty"
      },
      "name" : "Function group (alloplasty)",
      "description" : "Function group (alloplasty)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-FunctionTest.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/FunctionTest"
      },
      "name" : "Function test",
      "description" : "Function test",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-FunctionalScoreTypes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/FunctionalScoreTypes"
      },
      "name" : "FunctionalScoreTypes",
      "description" : "Anvendte typer ved måling af helbreds- eller funktionel score",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FunktionTestADLDANDEM.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FunktionTestADLDANDEM"
      },
      "name" : "Funktion test ADL (DANDEM)",
      "description" : "Funktion test ADL (DANDEM)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FunktionsgruppeDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FunktionsgruppeDKR"
      },
      "name" : "Funktionsgruppe (DKR)",
      "description" : "Funktionsgruppe (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FunktionsgruppeDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FunktionsgruppeDHR"
      },
      "name" : "Funktionsgruppe [DHR]",
      "description" : "Funktionsgruppe [DHR]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FoedselsstedRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FoedselsstedRETSPSYK"
      },
      "name" : "Fødselssted (RETSPSYK)",
      "description" : "Fødselssted (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SizesGeneral.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SizesGeneral"
      },
      "name" : "General size scale",
      "description" : "General size scale",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-GenericValues.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/GenericValues"
      },
      "name" : "Generic values",
      "description" : "Generic values for a multitude of questions. This is meant as an extension to several codesystems, where codes from below might appear.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Genoplivning.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Genoplivning"
      },
      "name" : "Genoplivning",
      "description" : "Aktivitet ifm genoplivning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Genoplivning.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Genoplivning"
      },
      "name" : "Genoplivning",
      "description" : "Aktivitet ifm genoplivning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GenoplivStoppet.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GenoplivStoppet"
      },
      "name" : "Genoplivning indstillet - årsag",
      "description" : "Årsager til indstilling af genoplivningsforsøg",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-GenoplivStoppet.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/GenoplivStoppet"
      },
      "name" : "Genoplivning indstillet - årsag",
      "description" : "Årsager til indstilling af genoplivningsforsøg",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GlenoidalkomponentIkkeIndsatDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GlenoidalkomponentIkkeIndsatDSR"
      },
      "name" : "Glenoidalkomponent - ikke indsat (DSR)",
      "description" : "Glenoidalkomponent - ikke indsat (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GlenoidalkomponentSupplerendeDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GlenoidalkomponentSupplerendeDSR"
      },
      "name" : "Glenoidalkomponent - supplerende (DSR)",
      "description" : "Glenoidalkomponent - supplerende (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GradAkutDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GradAkutDHDB"
      },
      "name" : "Grad af akut (DHDB)",
      "description" : "Grad af akut (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AnurismeAflukning.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AnurismeAflukning"
      },
      "name" : "Graden af aflukning af anurisme",
      "description" : "Graden af aflukning af anurisme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ResttumorGradering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ResttumorGradering"
      },
      "name" : "Gradering",
      "description" : "Gradering hvis der er fundet nogen resttumor",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GraftDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GraftDKRR"
      },
      "name" : "Graft (DKRR)",
      "description" : "Graft (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GraftACLDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GraftACLDKRR"
      },
      "name" : "Graft, ACL (DKRR)",
      "description" : "Graft, ACL (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-GraftCruciateLigaments.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/GraftCruciateLigaments"
      },
      "name" : "Grafts for cruciate ligaments; types of grafts",
      "description" : "Grafts for cruciate ligaments, types of grafts",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ManglendeBehandling.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ManglendeBehandling"
      },
      "name" : "Grund til manglende behandling",
      "description" : "Årsag til manglende behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GrundlidelseDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GrundlidelseDKR"
      },
      "name" : "Grundlidelse (DKR)",
      "description" : "Grundlidelse (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GrundlidelseDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GrundlidelseDSR"
      },
      "name" : "Grundlidelse (DSR)",
      "description" : "Grundlidelse (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GrundlidelseDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GrundlidelseDHR"
      },
      "name" : "Grundlidelse [DHR]",
      "description" : "Grundlidelse [DHR]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GrundlidelseDHR-2026-07.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GrundlidelseDHR-2026-07"
      },
      "name" : "Grundlidelse [DHR] 2026-07",
      "description" : "Grundlidelse [DHR]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-GynUndersoegDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/GynUndersoegDUGA"
      },
      "name" : "Gynækologisk undersøgelsesmetode (DUGA)",
      "description" : "Gynækologisk undersøgelsesmetode (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-GynUndersoegDUGA.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/GynUndersoegDUGA"
      },
      "name" : "Gynækologisk undersøgelsesmetode (DUGA)",
      "description" : "Gynækologisk undersøgelsesmetode (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HarrisHipScoreShoesSocks.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HarrisHipScoreShoesSocks"
      },
      "name" : "Harris Hip Score (HHS) - Activities - shoes, socks",
      "description" : "Harris Hip Score (HHS) - Activities - shoes socks. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HarrisHipScoreDistanceWalked.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HarrisHipScoreDistanceWalked"
      },
      "name" : "Harris Hip Score (HHS) - Distance walked",
      "description" : "Harris Hip Score (HHS) - Distance walked. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HarrisHipScoreLimp.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HarrisHipScoreLimp"
      },
      "name" : "Harris Hip Score (HHS) - Limp",
      "description" : "Harris Hip Score (HHS) - Limp. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HarrisHipScorePain.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HarrisHipScorePain"
      },
      "name" : "Harris Hip Score (HHS) - Pain",
      "description" : "Harris Hip Score (HHS) - Pain. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HarrisHipScorePublicTransportation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HarrisHipScorePublicTransportation"
      },
      "name" : "Harris Hip Score (HHS) - Public transportation",
      "description" : "Harris Hip Score (HHS) - Public transportation. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HarrisHipScoreSitting.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HarrisHipScoreSitting"
      },
      "name" : "Harris Hip Score (HHS) - Sitting",
      "description" : "Harris Hip Score (HHS) - Sitting. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HarrisHipScoreStairs.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HarrisHipScoreStairs"
      },
      "name" : "Harris Hip Score (HHS) - Stairs",
      "description" : "Harris Hip Score (HHS) - Stairs. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HarrisHipScoreSupport.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HarrisHipScoreSupport"
      },
      "name" : "Harris Hip Score (HHS) - Support",
      "description" : "Harris Hip Score (HHS) - Support. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HarrisHipScoreGangafvikling.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HarrisHipScoreGangafvikling"
      },
      "name" : "Harris Hip Score - Gangafvikling",
      "description" : "Harris Hip Score - Gangafvikling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HarrisHipScoreGangdistance.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HarrisHipScoreGangdistance"
      },
      "name" : "Harris Hip Score - Gangdistance",
      "description" : "Harris Hip Score - Gangdistance",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HarrisHipScoreHjaelpemidler.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HarrisHipScoreHjaelpemidler"
      },
      "name" : "Harris Hip Score - Hjælpemidler",
      "description" : "Harris Hip Score - Hjælpemidler",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HarrisHipScoreOffentligTransport.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HarrisHipScoreOffentligTransport"
      },
      "name" : "Harris Hip Score - Offentlig transport",
      "description" : "Harris Hip Score - Offentlig transport",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HarrisHipScoreSiddefunktion.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HarrisHipScoreSiddefunktion"
      },
      "name" : "Harris Hip Score - Siddefunktion",
      "description" : "Harris Hip Score - Siddefunktion",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HarrisHipScoreSkoStroemper.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HarrisHipScoreSkoStroemper"
      },
      "name" : "Harris Hip Score - Sko og strømer",
      "description" : "Harris Hip Score - Sko og strømer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HarrisHipScoreSmerter.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HarrisHipScoreSmerter"
      },
      "name" : "Harris Hip Score - Smerter",
      "description" : "Harris Hip Score - Smerter",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HarrisHipScoreTrappegang.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HarrisHipScoreTrappegang"
      },
      "name" : "Harris Hip Score - Trappegang",
      "description" : "Harris Hip Score - Trappegang",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HemialloplastikFemur.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HemialloplastikFemur"
      },
      "name" : "Hemialloplastik undertyper (femurkomponent)",
      "description" : "Hemialloplastik undertyper (femurkomponent)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HenvistFra.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HenvistFra"
      },
      "name" : "Henvist fra",
      "description" : "Hvor er patienten blevet henvist fra",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HerniaSize.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HerniaSize"
      },
      "name" : "Hernia size",
      "description" : "Hernia size",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HernieStoerrelse.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HernieStoerrelse"
      },
      "name" : "Hernie størrelse",
      "description" : "Hernie størrelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HaemoglobinTransf4.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HaemoglobinTransf4"
      },
      "name" : "HGBTransfusion4",
      "description" : "Hæmoglobinværdi før blodtransfusion - 4 valg",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HaemoglobinTransf4.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HaemoglobinTransf4"
      },
      "name" : "HGBTransfusion4",
      "description" : "Hæmoglobinværdi før blodtransfusion",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HipJointArthroplastyComponent.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HipJointArthroplastyComponent"
      },
      "name" : "Hip joint arthroplasty - components",
      "description" : "Hip joint arthroplasty - components",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TumorClassificationHistology.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TumorClassificationHistology"
      },
      "name" : "Histologisk\tklassifikation (fordøjelsessystemet)",
      "description" : "Tumor klassificeres histologisk jvf. WHO Classification of Tumours of the Digestive System. Link: https://dccg.dk/wp-content/uploads/2017/08/Tumorklassifikation.pdf",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HjerneoedemDAP.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HjerneoedemDAP"
      },
      "name" : "Hjerneødem (DAP)",
      "description" : "Hjerneødem fundet i forbindelse med billeddiagnostisk undersøgelse (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HeartRhythm.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HeartRhythm"
      },
      "name" : "Hjerterytme",
      "description" : "Hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Hjerterytme.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Hjerterytme"
      },
      "name" : "Hjerterytme",
      "description" : "Analyse af hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HeartRhythm.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HeartRhythm"
      },
      "name" : "Hjerterytme",
      "description" : "Patientens hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Rytme1Obs.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Rytme1Obs"
      },
      "name" : "Hjerterytme - første obs",
      "description" : "Første observerede hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Rytme1Obs.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Rytme1Obs"
      },
      "name" : "Hjerterytme - første obs",
      "description" : "Første observerede hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HjerterytmeAnalyse.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HjerterytmeAnalyse"
      },
      "name" : "HjerterytmeAnalyse",
      "description" : "Analyse af hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HeartAttackTypes.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HeartAttackTypes"
      },
      "name" : "Hjertestop type",
      "description" : "Forskellige arter af hjertestop / fejl",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HjertestopAarsag.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HjertestopAarsag"
      },
      "name" : "Hjertestop Årsag",
      "description" : "Årsag til hjertestop",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HjertestopAarsag.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HjertestopAarsag"
      },
      "name" : "Hjertestop Årsag",
      "description" : "Årsag til hjertestop",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HousingType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HousingType"
      },
      "name" : "Housing type",
      "description" : "Housing type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HumeruskomponentDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HumeruskomponentDSR"
      },
      "name" : "Humeruskomponent (DSR)",
      "description" : "Humeruskomponent (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HuntHessClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HuntHessClassification"
      },
      "name" : "Hunt and Hess scale",
      "description" : "Hunt and Hess scale; Link: https://radiopaedia.org/articles/hunt-and-hess-grading-system",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HuntHessClassification.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HuntHessClassification"
      },
      "name" : "Hunt-Hess score",
      "description" : "Hunt-Hess score ud fra klassifikationen.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ClinicalProtocolNotParticipated.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ClinicalProtocolNotParticipated"
      },
      "name" : "Hvorfor er patienten ikke involveret",
      "description" : "Hvorfor er patienten ikke involveret",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Hyppighed.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Hyppighed"
      },
      "name" : "Hyppighed",
      "description" : "Opfølgning efter 2 eller 5 år",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LipomHandlingDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LipomHandlingDHDB"
      },
      "name" : "Håndtering af lipom (DHDB)",
      "description" : "Håndtering af lipom (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HaendelseIndtraeffer.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HaendelseIndtraeffer"
      },
      "name" : "Hændelse indtræffer",
      "description" : "I hvilken sammenhæng sker en given hændelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IDC10DPDCancer.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IDC10DPDCancer"
      },
      "name" : "ICD 10 cancer koder til DPD",
      "description" : "ICD 10 cancer koder til DPD",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IDC10DPD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IDC10DPD"
      },
      "name" : "ICD 10 koder til DPD",
      "description" : "ICD 10 koder til DPD",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IDC10DPDNonCancer.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IDC10DPDNonCancer"
      },
      "name" : "ICD 10 non-cancer koder til DPD",
      "description" : "ICD 10 non-cancer koder til DPD",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ICRSGradingSystem.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ICRSGradingSystem"
      },
      "name" : "ICRS grading system",
      "description" : "ICRS grading system; Link: https://www.researchgate.net/figure/The-International-Cartilage-Repair-Society-ICRS-Cartilage-Lesion-Classification-System_fig2_224847959",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ICRSGraduering14.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ICRSGraduering14"
      },
      "name" : "ICRS graduering 1-4",
      "description" : "ICRS graduering 1-4",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-IkkeBesvaret.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/IkkeBesvaret"
      },
      "name" : "Ikke besvaret",
      "description" : "Årsager til ikke-besvaret spørgsmål",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IkkeBesvaret.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IkkeBesvaret"
      },
      "name" : "Ikke besvaret (MDS)",
      "description" : "Årsager til ikke-besvaret spørgsmål (MDS)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IkkeUdfoert.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IkkeUdfoert"
      },
      "name" : "Ikke udført",
      "description" : "Ikke udført.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Imaging.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Imaging"
      },
      "name" : "Imaging",
      "description" : "Imaging",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImagingAngio.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImagingAngio"
      },
      "name" : "Imaging Angio",
      "description" : "Imaging Angio",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Immunoterapi.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Immunoterapi"
      },
      "name" : "Immunoterapi",
      "description" : "Immunoterapi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ImplantComponents.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ImplantComponents"
      },
      "name" : "Implant components",
      "description" : "Implant components",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantatAnatomiskDesign.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantatAnatomiskDesign"
      },
      "name" : "Implantat - anatomisk design",
      "description" : "Implantat - anatomisk design",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantatAnatomiskReverse.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantatAnatomiskReverse"
      },
      "name" : "Implantat - anatomisk/reverse",
      "description" : "Implantat - anatomisk/reverse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantatAnatomiskOffset.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantatAnatomiskOffset"
      },
      "name" : "Implantat - anatomisk: offset",
      "description" : "Implantat - anatomisk: offset",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantatMaterialeDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantatMaterialeDSR"
      },
      "name" : "Implantat - materiale (DSR)",
      "description" : "Implantat - materiale (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantatMaterialeKeramikMetalAndet.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantatMaterialeKeramikMetalAndet"
      },
      "name" : "Implantat - materiale (keramik, metal, andet)",
      "description" : "Implantat - materiale (keramik, metal, andet)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantatMateriale-KeramikMetalAndet-2026-07.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantatMateriale-KeramikMetalAndet-2026-07"
      },
      "name" : "Implantat - materiale (keramik, metal, andet) 2026-07",
      "description" : "Implantat - materiale (keramik, metal, andet)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantatMaterialePolyethylenKeramikMetal.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantatMaterialePolyethylenKeramikMetal"
      },
      "name" : "Implantat - materiale (polyethylen, keramik, metal)",
      "description" : "Implantat - materiale (polyethylen, keramik, metal)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantatReverseDesign.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantatReverseDesign"
      },
      "name" : "Implantat - reverse design",
      "description" : "Implantat - reverse design",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ImplantattypeDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ImplantattypeDUGA"
      },
      "name" : "Implantattype (DUGA)",
      "description" : "Implantattype (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ImplantattypeDUGA.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ImplantattypeDUGA"
      },
      "name" : "Implantattype - Urogynækologi (DUGA)",
      "description" : "Implantattype - Urogynækologi (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-IncisionChoice.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/IncisionChoice"
      },
      "name" : "Incision choice",
      "description" : "Incisionsvalg eller operativ adgang",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Incisionsvalg.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Incisionsvalg"
      },
      "name" : "Incisionsvalg",
      "description" : "Incisionsvalg for kræft databaser (DEGC)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebComponentsSeparationDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebComponentsSeparationDHDB"
      },
      "name" : "Indgreb - Components Separation (DHDB)",
      "description" : "Indgreb - Components Separation (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebComponentsSeparationTypeDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebComponentsSeparationTypeDHDB"
      },
      "name" : "Indgreb - Components Separation, type (DHDB)",
      "description" : "Indgreb - Components Separation, type (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebFemoralhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebFemoralhernieDHDB"
      },
      "name" : "Indgreb - femoalhernie (DHDB)",
      "description" : "Indgreb - femoalhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebNerveSet.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebNerveSet"
      },
      "name" : "Indgreb - hvad gøres hvis en nerve er set",
      "description" : "Indgreb - hvad gøres hvis en nerve er set",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebIngvinalhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebIngvinalhernieDHDB"
      },
      "name" : "Indgreb - ingvinalhernie (DHDB)",
      "description" : "Indgreb - ingvinalhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebVentralhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebVentralhernieDHDB"
      },
      "name" : "Indgreb - ventralhernie (DHDB)",
      "description" : "Indgreb - ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebVentralhernieAndenDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebVentralhernieAndenDHDB"
      },
      "name" : "Indgreb - ventralhernie anden minimal indgreb (DHDB)",
      "description" : "Indgreb - ventralhernie anden minimal indgreb (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebLaparoskopiskDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebLaparoskopiskDHDB"
      },
      "name" : "Indgreb, laparoskopisk - ingvinalhernie (DHDB)",
      "description" : "Indgreb, laparoskopisk - ingvinalhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebAabenMeshIngvinalhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebAabenMeshIngvinalhernieDHDB"
      },
      "name" : "Indgreb, åben mesh - ingvinalhernie (DHDB)",
      "description" : "Indgreb, åben mesh - ingvinalhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebAabenIngvinalhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebAabenIngvinalhernieDHDB"
      },
      "name" : "Indgreb, åben uden mesh - ingvinalhernie (DHDB)",
      "description" : "Indgreb, åben uden mesh - ingvinalhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndikationTES.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndikationTES"
      },
      "name" : "Indikation for TES",
      "description" : "Indikation for TES",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndsatFjernet.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndsatFjernet"
      },
      "name" : "Indsat / fjernet",
      "description" : "Indsat / fjernet",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndsatIkkeIndsat.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndsatIkkeIndsat"
      },
      "name" : "Indsat / ikke indsat",
      "description" : "Indsat / ikke indsat",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Ingen.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Ingen"
      },
      "name" : "Ingen (enkelt udfald)",
      "description" : "Giver mulighed for at svare ingen",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IngenBehandling.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IngenBehandling"
      },
      "name" : "Ingen Behandling(enkelt udfald)",
      "description" : "Giver mulighed for at svare ingen behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IngvinalhernieSpecificering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IngvinalhernieSpecificering"
      },
      "name" : "Ingvinalhernie specificering",
      "description" : "Ingvinalhernie specificering",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-InitialRespons.html"
      }],
      "reference" : {
        "reference" : "ValueSet/InitialRespons"
      },
      "name" : "InitialRespons",
      "description" : "InitialRespons",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-IntervalsExact.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/IntervalsExact"
      },
      "name" : "Intervaller eksakte værdier",
      "description" : "Intervaller med varierende eksakte værdier",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Intervals.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Intervals"
      },
      "name" : "Intervals",
      "description" : "Intervals. Generic intervals.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Interventionsforloeb.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Interventionsforloeb"
      },
      "name" : "Interventionsforløb",
      "description" : "Interventionsforløb",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Interventionsforloeb.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Interventionsforloeb"
      },
      "name" : "Interventionsforløb",
      "description" : "Interventionsforløb",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Interventionsgruppe.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Interventionsgruppe"
      },
      "name" : "Interventionsgruppe",
      "description" : "Interventionsgruppe (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-InterventionsgruppeDialyseHaemoDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/InterventionsgruppeDialyseHaemoDNSL"
      },
      "name" : "Interventionsgruppe Hæmodialyse (DNSL)",
      "description" : "Interventionsgruppe Hæmodialyse (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-InterventionsgruppeDialysePeritonealDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/InterventionsgruppeDialysePeritonealDNSL"
      },
      "name" : "Interventionsgruppe Peritonealdialyse (DNSL)",
      "description" : "Interventionsgruppe Peritonealdialyse (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-InterventionsgruppeTransplantDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/InterventionsgruppeTransplantDNSL"
      },
      "name" : "Interventionsgruppe Transplantation (DNSL)",
      "description" : "Interventionsgruppe Transplantation (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-InterventionsgruppeTransplantExclDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/InterventionsgruppeTransplantExclDNSL"
      },
      "name" : "Interventionsgruppe Transplantation Excl (DNSL)",
      "description" : "Interventionsgruppe Transplantation eksklusiv transplantation udfaldet (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IntraoperativeLaesionerKDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IntraoperativeLaesionerKDCCG"
      },
      "name" : "Intraoperative læsioner - Kvinder (DCCG)",
      "description" : "Intraoperative læsioner - Kvinder (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IntraoperativeLaesionerMDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IntraoperativeLaesionerMDCCG"
      },
      "name" : "Intraoperative læsioner - Mænd (DCCG)",
      "description" : "Intraoperative læsioner - Mænd (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Intubation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Intubation"
      },
      "name" : "Intubation",
      "description" : "Resultat af luftvejshåndtering vha. intubation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Intubation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Intubation"
      },
      "name" : "Intubation",
      "description" : "Resultat af luftvejshåndtering vha. intubation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-IPSSRCytogeneticCategory.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/IPSSRCytogeneticCategory"
      },
      "name" : "IPSS-R - Cytogenetic Category",
      "description" : "IPSS-R - Cytogenetic Category. Link: https://www.hematology.dk/index.php/vejledninger/udregnere/330-ipss-r",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IPSSRCytogenetiskRisiko.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IPSSRCytogenetiskRisiko"
      },
      "name" : "IPSS-R - Cytogenetisk risiko-score",
      "description" : "IPSS-R - Cytogenetisk risiko-score",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaEnkeltUdfald.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaEnkeltUdfald"
      },
      "name" : "Ja (enkelt udfald)",
      "description" : "Ja (enkelt udfald)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNej.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNej"
      },
      "name" : "Ja / Nej",
      "description" : "Muligheden for kun ja og nej",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejBetinget.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejBetinget"
      },
      "name" : "Ja / Nej / Betinget",
      "description" : "Giver mulighed for at svare betinget til et spurgt spørgsmål",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejIkkefagligrelevant.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejIkkefagligrelevant"
      },
      "name" : "Ja / Nej / Ikke faglig relevant",
      "description" : "Dækker over Ja/nej/ikke faglig relevant.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejIkkeindiceret.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejIkkeindiceret"
      },
      "name" : "Ja / Nej / Ikke indiceret",
      "description" : "Muligheden for ja, nej og ikke indiceret",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejEjMaalt.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejEjMaalt"
      },
      "name" : "Ja / Nej / Ikke målt",
      "description" : "Giver mulighed for et 'ikke-målt' svar",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejIkkerelevant.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejIkkerelevant"
      },
      "name" : "Ja / Nej / Ikke relevant",
      "description" : "Dækker over Ja/nej/ikke relevant.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejIkkeSpurgt.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejIkkeSpurgt"
      },
      "name" : "Ja / Nej / Ikke spurgt",
      "description" : "Muligheden for ja, nej og ikke spurgt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejIkkeUdfoert.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejIkkeUdfoert"
      },
      "name" : "Ja / Nej / Ikke udført",
      "description" : "Dækker over Ja/nej/ikke udført.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejKanIkkeAfgoeres.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejKanIkkeAfgoeres"
      },
      "name" : "Ja / Nej / Kan ikke afgøres",
      "description" : "Undersøgt men resultat ikke entydigt / ukendt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejUkendt.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejUkendt"
      },
      "name" : "Ja / Nej / Ukendt",
      "description" : "Giver mulighed for at svare ukendt til et spurgt spørgsmål",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejUkendtIkkerelevant.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejUkendtIkkerelevant"
      },
      "name" : "Ja / Nej / Ukendt / Ikke relevant",
      "description" : "Giver mulighed for at svare ukendt eller ikke relevant til et spurgt spørgsmål",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejUvist.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejUvist"
      },
      "name" : "Ja / Nej / Uvist",
      "description" : "Giver mulighed for et 'måske'-svar",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejUvistIkkeudfoert.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejUvistIkkeudfoert"
      },
      "name" : "Ja / Nej / Uvist / Ikke udført",
      "description" : "Dækker over Ja/nej/Uvist/ikke udført.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejUvistUkendt.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejUvistUkendt"
      },
      "name" : "Ja / Nej / Uvist / Ukendt",
      "description" : "Giver mulighed for både måske og et ikke spurgt spørgsmål",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-JaNejUvistUkendtIkkeRelevant.html"
      }],
      "reference" : {
        "reference" : "ValueSet/JaNejUvistUkendtIkkeRelevant"
      },
      "name" : "Ja / Nej / Uvist / Ukendt / Relevant",
      "description" : "Giver mulighed for både måske og et ikke spurgt spørgsmål",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-CoronaryArteryGraph.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/CoronaryArteryGraph"
      },
      "name" : "KAG risk assesment",
      "description" : "Should the patient get a KAG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CoronaryArteryGraph.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CoronaryArteryGraph"
      },
      "name" : "KAG vurdering",
      "description" : "Skal patienten få et KAG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-KellgrenLawrenceKlassifikation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/KellgrenLawrenceKlassifikation"
      },
      "name" : "Kellgren-Lawrence Klassifikation",
      "description" : "Kellgren-Lawrence Klassifikation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KellgrenLawsonKlassifikation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KellgrenLawsonKlassifikation"
      },
      "name" : "Kellgren-Lawrence Klassifikation (DKR)",
      "description" : "Kellgren-Lawrence Klassifikation (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Chemotherapy.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Chemotherapy"
      },
      "name" : "Kemoterapi",
      "description" : "Hvilken art kemoterapi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Kemoterapiregime.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Kemoterapiregime"
      },
      "name" : "Kemoterapiregime",
      "description" : "Kemoterapiregime (blanding af ATC, SKS og uspecifikke koder)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HeartFailure.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HeartFailure"
      },
      "name" : "Killip sværhedsgrad",
      "description" : "Killip sværhedsgrad af hjertestop",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KirurgiskAdgangDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KirurgiskAdgangDSR"
      },
      "name" : "Kirurgisk adgang (DSR)",
      "description" : "Kirurgisk adgang (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MKategoriDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MKategoriDCCG"
      },
      "name" : "Klinisk M-kategori DCCG",
      "description" : "Klinisk M-kategori DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NKategoriDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NKategoriDCCG"
      },
      "name" : "Klinisk N-kategori DCCG",
      "description" : "Klinisk N-kategori DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TKategoriDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TKategoriDCCG"
      },
      "name" : "Klinisk T-kategori DCCG",
      "description" : "Klinisk T-kategori DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ClinicalProtocolCodes.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ClinicalProtocolCodes"
      },
      "name" : "Kliniske protokolleret koder",
      "description" : "Kode til en klinisk protokolleret undersøgelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ClinicalProtocolCodes1.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ClinicalProtocolCodes1"
      },
      "name" : "Kliniske protokolleret koder 1",
      "description" : "Kode til en klinisk protokolleret undersøgelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KliniskeSymptomerDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KliniskeSymptomerDCCG"
      },
      "name" : "Kliniske symptomer (DCCG)",
      "description" : "Kliniske symptomer (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-KliniskeSymptomerDCCG.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/KliniskeSymptomerDCCG"
      },
      "name" : "Kliniske symptomer (DCCG)",
      "description" : "Kliniske symptomer (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-KneeJointArthroplastyComponent.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/KneeJointArthroplastyComponent"
      },
      "name" : "Knee joint arthroplasty - components",
      "description" : "Knee joint arthroplasty - components",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-KneeLoosenessGrading.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/KneeLoosenessGrading"
      },
      "name" : "Knee looseness grading",
      "description" : "Knee looseness grading",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RadiologicalBoneChanges.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RadiologicalBoneChanges"
      },
      "name" : "Knogle forandringer",
      "description" : "Radiologiske knogleforandringer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RadiologicalBoneChanges202412.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RadiologicalBoneChanges202412"
      },
      "name" : "Knogle forandringer 202412",
      "description" : "Radiologiske knogleforandringer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KnoglegraftDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KnoglegraftDSR"
      },
      "name" : "Knoglegraft (DSR)",
      "description" : "Knoglegraft (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KnogletransplantationDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KnogletransplantationDHR"
      },
      "name" : "Knogletransplantation (DHR)",
      "description" : "Knogletransplantation acetabulum/femur (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KnaeLoeshedPosterolateral.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KnaeLoeshedPosterolateral"
      },
      "name" : "Knæ løshed (posterolateral)",
      "description" : "Knæ løshed (posterolateral)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KnaeLoeshedGradering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KnaeLoeshedGradering"
      },
      "name" : "Knæ løshed gradering",
      "description" : "Knæ løshed gradering",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KnaeakseDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KnaeakseDKR"
      },
      "name" : "Knæakse (DKR)",
      "description" : "Knæakse (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KognitivPaavirkningDANDEM.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KognitivPaavirkningDANDEM"
      },
      "name" : "Kognitiv påvirkning (DANDEM)",
      "description" : "Kognitiv påvirkning (DANDEM)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KognitivTestDANDEM.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KognitivTestDANDEM"
      },
      "name" : "Kognitiv test (DANDEM)",
      "description" : "Kognitiv test (DANDEM)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplikationerDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplikationerDKRR"
      },
      "name" : "Komplikationer (DKRR)",
      "description" : "Komplikationer (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplAndreDiagDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplAndreDiagDUGA"
      },
      "name" : "Komplikationer pga. 'Andre' - Diagnosekoder (DUGA)",
      "description" : "Komplikationer pga. 'Andre' - Diagnosekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplAndreProcDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplAndreProcDUGA"
      },
      "name" : "Komplikationer pga. 'Andre' - Procedurekoder (DUGA)",
      "description" : "Komplikationer pga. 'Andre' - Procedurekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplBlaereDiagDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplBlaereDiagDUGA"
      },
      "name" : "Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)",
      "description" : "Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplBlaereProcDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplBlaereProcDUGA"
      },
      "name" : "Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA)",
      "description" : "Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplBloedDiagDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplBloedDiagDUGA"
      },
      "name" : "Komplikationer pga. blødning - Diagnosekoder (DUGA)",
      "description" : "Komplikationer pga. blødning - Diagnosekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplBloedProcDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplBloedProcDUGA"
      },
      "name" : "Komplikationer pga. blødning - Procedurekoder (DUGA)",
      "description" : "Komplikationer pga. blødning - Procedurekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplInfektionDiagDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplInfektionDiagDUGA"
      },
      "name" : "Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA)",
      "description" : "Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplInfektionProcDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplInfektionProcDUGA"
      },
      "name" : "Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA)",
      "description" : "Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplOrganperfDiagDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplOrganperfDiagDUGA"
      },
      "name" : "Komplikationer pga. organperforation - Diagnosekoder (DUGA)",
      "description" : "Komplikationer pga. organperforation - Diagnosekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplOrganperfProcDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplOrganperfProcDUGA"
      },
      "name" : "Komplikationer pga. organperforation - Procedurekoder (DUGA)",
      "description" : "Komplikationer pga. organperforation - Procedurekoder (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplikationerVaskulaerDMPN.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplikationerVaskulaerDMPN"
      },
      "name" : "Komplikationer Vaskulær DMPN",
      "description" : "Typer af komplikationer ved vaskulære events - DMPN",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplikationerBehandlingDEGC.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplikationerBehandlingDEGC"
      },
      "name" : "Komplikationer, behandling (DEGC)",
      "description" : "Komplikationer i forhold til DEGC operationer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplikationerEndovaskulaerSAH.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplikationerEndovaskulaerSAH"
      },
      "name" : "Komplikationer, endovaskulær [SAH]",
      "description" : "Komplikationer i forhold til endovaskulær [SAH]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplikationerKirurgiskSAH.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplikationerKirurgiskSAH"
      },
      "name" : "Komplikationer, kirurgisk [SAH]",
      "description" : "Komplikationer i forhold til kirurgisk [SAH]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplikationerPeroperativeDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplikationerPeroperativeDHR"
      },
      "name" : "Komplikationer, peroperative (DHR)",
      "description" : "Komplikationer, peroperative (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomplikationerPeroperativeDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomplikationerPeroperativeDKR"
      },
      "name" : "Komplikationer, peroperative (DKR)",
      "description" : "Komplikationer, peroperative (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentAcetabulumDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentAcetabulumDHR"
      },
      "name" : "Komponent - acetabulum (DHR)",
      "description" : "Komponent - acetabulum (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentAcetabulumStatusDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentAcetabulumStatusDHR"
      },
      "name" : "Komponent - acetabulum, status (DHR)",
      "description" : "Komponent - acetabulum, status (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentFemurDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentFemurDHR"
      },
      "name" : "Komponent - femur (DHR)",
      "description" : "Komponent - femur (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentFemurDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentFemurDKR"
      },
      "name" : "Komponent - femur (DKR)",
      "description" : "Komponent - femur (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentFemurDKR202503.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentFemurDKR202503"
      },
      "name" : "Komponent - femur (DKR) 2025",
      "description" : "Komponent - femur (DKR) - Rettelser 2025",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentFemurDKRrevision.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentFemurDKRrevision"
      },
      "name" : "Komponent - femur (DKR) revision",
      "description" : "Komponent - femur (DKR) revision",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentFemurDKRrevision202503.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentFemurDKRrevision202503"
      },
      "name" : "Komponent - femur (DKR) revision 2025",
      "description" : "Komponent - femur (DKR) revision - Rettelser 2025",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentFemurStatusDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentFemurStatusDHR"
      },
      "name" : "Komponent - femur, status (DHR)",
      "description" : "Komponent - femur, status (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentFemurStatusDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentFemurStatusDKR"
      },
      "name" : "Komponent - femur, status (DKR)",
      "description" : "Komponent - femur, status (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentPatellaDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentPatellaDKR"
      },
      "name" : "Komponent - patella (DKR)",
      "description" : "Komponent - patella (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentPatellaDKRrevision.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentPatellaDKRrevision"
      },
      "name" : "Komponent - patella (DKR) revision",
      "description" : "Komponent - patella (DKR) revision",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentPatellaMaterialeDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentPatellaMaterialeDKR"
      },
      "name" : "Komponent - patella materiale (DKR)",
      "description" : "Komponent - patella materiale (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentSupplementDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentSupplementDKR"
      },
      "name" : "Komponent - supplement (DKR)",
      "description" : "Komponent - supplement (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentTibiaDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentTibiaDKR"
      },
      "name" : "Komponent - tibia (DKR)",
      "description" : "Komponent - tibia (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentTibiaDKR202503.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentTibiaDKR202503"
      },
      "name" : "Komponent - tibia (DKR) 2025",
      "description" : "Komponent - tibia (DKR) Rettelse 2025",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentTibiaDKRrevision.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentTibiaDKRrevision"
      },
      "name" : "Komponent - tibia (DKR) revision",
      "description" : "Komponent - tibia (DKR) revision",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentTibiaDKRrevision202503.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentTibiaDKRrevision202503"
      },
      "name" : "Komponent - tibia (DKR) revision 2025",
      "description" : "Komponent - tibia (DKR) revision - Rettelse 2025",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentTibiaStatusDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentTibiaStatusDKR"
      },
      "name" : "Komponent - tibia, status (DKR)",
      "description" : "Komponent - tibia, status (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentTypeDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentTypeDKR"
      },
      "name" : "Komponent type (DKR)",
      "description" : "Komponent type (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentTypeFemurDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentTypeFemurDHR"
      },
      "name" : "Komponent type - femur (DHR)",
      "description" : "Komponent type - femur (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KomponentTypeHullerUdenhullerDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KomponentTypeHullerUdenhullerDHR"
      },
      "name" : "Komponent type - Huller/Uden huller (DHR)",
      "description" : "Komponent type - Huller/Uden huller (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KonferenceDPD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KonferenceDPD"
      },
      "name" : "Konference DPD",
      "description" : "Tværfaglig konference",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ContactPatient.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ContactPatient"
      },
      "name" : "Kontakt til patient",
      "description" : "Kontakttype til patient - Undersøgelse, interview, mv.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KontaktPatient.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KontaktPatient"
      },
      "name" : "Kontakt til patienten",
      "description" : "Kontakt til patienten",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Kontamineringsgrad.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Kontamineringsgrad"
      },
      "name" : "Kontamineringsgrad",
      "description" : "Kontamineringsgrad",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KorsbaandEjBevaret.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KorsbaandEjBevaret"
      },
      "name" : "Korsbånd ikke bevaret",
      "description" : "Korsbånd ikke bevaret efter operation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-KorsbaandEjBevaret.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/KorsbaandEjBevaret"
      },
      "name" : "Korsbånd ikke bevaret",
      "description" : "Korsbånd ikke bevaret efter operation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ChromosomPairs.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ChromosomPairs"
      },
      "name" : "Kromosom par",
      "description" : "Kromosom par",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-KursusregAarsag.html"
      }],
      "reference" : {
        "reference" : "ValueSet/KursusregAarsag"
      },
      "name" : "Kursusregistrering - årsag",
      "description" : "Kursusregistrering - årsag til manglende oplysninger",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SmerteKvalme.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SmerteKvalme"
      },
      "name" : "KvalmeSmerte",
      "description" : "Vurdering af patientens smerte- / kvalmetilstand",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Gender.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Gender"
      },
      "name" : "Køn",
      "description" : "Fhir køn system",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-LaryngoskopiDegree.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/LaryngoskopiDegree"
      },
      "name" : "Laryngoskopi grad",
      "description" : "Bedst opnåede laryngoskopigrad ved  direkte laryngoskopi efter Cormack & Lehane",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LaryngoskopiDegree.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LaryngoskopiDegree"
      },
      "name" : "Laryngoskopigrad",
      "description" : "Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LaryngoskopiDegree2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LaryngoskopiDegree2026"
      },
      "name" : "Laryngoskopigrad 2026",
      "description" : "Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LedbaandsrekonstruktionDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LedbaandsrekonstruktionDKRR"
      },
      "name" : "Ledbåndsrekonstruktioner (DKRR)",
      "description" : "Ledbåndsrekonstruktioner (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LeftRight.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LeftRight"
      },
      "name" : "Left or right",
      "description" : "Left or right position",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-LesionType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/LesionType"
      },
      "name" : "Lesion type",
      "description" : "Lesion type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDLeukemiaDiagnose.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDLeukemiaDiagnose"
      },
      "name" : "Leukæmi diagnoser",
      "description" : "Leukæmi diagnoser",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LimnavnDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LimnavnDHDB"
      },
      "name" : "Limnavn (DHDB)",
      "description" : "Limnavn (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LinerCrosslinkedDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LinerCrosslinkedDHR"
      },
      "name" : "Liner - Crosslinked (DHR)",
      "description" : "Liner - Crosslinked (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-KomponentLiner.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/KomponentLiner"
      },
      "name" : "Liner komponent",
      "description" : "Liner komponenter med/uden post",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LinerMedPostDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LinerMedPostDKR"
      },
      "name" : "Liner komponent med Post (DKR)",
      "description" : "Liner komponent med Post (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LinerUdenPostDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LinerUdenPostDKR"
      },
      "name" : "Liner komponent uden Post (DKR)",
      "description" : "Liner komponent uden Post (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LinertypeDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LinertypeDHR"
      },
      "name" : "Linertype - (DHR)",
      "description" : "Linertype - (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LiqourDraenage.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LiqourDraenage"
      },
      "name" : "Liqour drænage",
      "description" : "Liqour drænage",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-LiquorDrain.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/LiquorDrain"
      },
      "name" : "Liquor drain",
      "description" : "Liqour drænage",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-LifeStatus.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/LifeStatus"
      },
      "name" : "Liv Status",
      "description" : "Patientens status ved udskrivelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LifeStatus.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LifeStatus"
      },
      "name" : "Livstatus",
      "description" : "Status ved udskrivelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LokalBloedningDAP.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LokalBloedningDAP"
      },
      "name" : "Lokal blødning (DAP)",
      "description" : "Lokal blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LokalBloedningTrombolyse.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LokalBloedningTrombolyse"
      },
      "name" : "Lokal blødning Trombolyse",
      "description" : "Lokal blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LokalisationEsophagusDEGC.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LokalisationEsophagusDEGC"
      },
      "name" : "Lokalisation",
      "description" : "Lokalisation af cancer i esophagus [DEGC]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LokalitetDANARREST.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LokalitetDANARREST"
      },
      "name" : "Lokalitet DANARREST",
      "description" : "Lokalitet DANARREST",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-EsophagealLokalization.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/EsophagealLokalization"
      },
      "name" : "Lokalization esophagus cancer",
      "description" : "Lokalization esophagus cancer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DSAFundLokation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DSAFundLokation"
      },
      "name" : "Lokation for tromber, fundet vha. DSA",
      "description" : "Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DSAFundLokation2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DSAFundLokation2026"
      },
      "name" : "Lokation for tromber, fundet vha. DSA 2026",
      "description" : "Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LuftvejForsoeg.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LuftvejForsoeg"
      },
      "name" : "LuftvejForsøgsplan",
      "description" : "1.-6. forsøg på etablering af Luftvejsadgang",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LuftvejsHaandtering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LuftvejsHaandtering"
      },
      "name" : "Luftvejshåndtering",
      "description" : "Anvendte indgreb til luftvejsunderstøttelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LuftvejsHaandtering2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LuftvejsHaandtering2026"
      },
      "name" : "Luftvejshåndtering 2026",
      "description" : "Anvendte indgreb til luftvejsunderstøttelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LuftvejsHaandteringsidsteforsoeg.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LuftvejsHaandteringsidsteforsoeg"
      },
      "name" : "Luftvejshåndtering sidste forsøg",
      "description" : "Luftvejshåndtering sidste forsøg",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Luftvejsplan.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Luftvejsplan"
      },
      "name" : "Luftvejsplan",
      "description" : "Mulige planlagte indgreb til luftvejsunderstøttelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Luftvejsplan2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Luftvejsplan2026"
      },
      "name" : "Luftvejsplan 2026",
      "description" : "Mulige planlagte indgreb til luftvejsunderstøttelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LukningHudDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LukningHudDHDB"
      },
      "name" : "Lukning af hud (DHDB)",
      "description" : "Lukning af hud (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MComponentType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MComponentType"
      },
      "name" : "M component (Myeloma protein) type",
      "description" : "M component (Myeloma protein) type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MComponentTypeLyfo.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MComponentTypeLyfo"
      },
      "name" : "M komponent (Myeloma protein) type",
      "description" : "M komponent (Myeloma protein) type [LYFO]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MKomponentLaboratoriesvar.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MKomponentLaboratoriesvar"
      },
      "name" : "M-komponent; laboratoriesvar",
      "description" : "M-komponent; laboratoriesvar",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ComplicationsManifestation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ComplicationsManifestation"
      },
      "name" : "Manifeste komplikationer",
      "description" : "Manifeste komplikationer [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ComplicationsManifestation202412.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ComplicationsManifestation202412"
      },
      "name" : "Manifeste komplikationer 202412",
      "description" : "Manifeste komplikationer [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MaritalStatus.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MaritalStatus"
      },
      "name" : "Marital status / Living with others",
      "description" : "Marital status / Living with others",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDMDSDiagnose.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDMDSDiagnose"
      },
      "name" : "MDS diagnoser (Patobank SNOMED)",
      "description" : "MDS diagnoser (Patobank SNOMED)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MDTIkkeFulgt.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MDTIkkeFulgt"
      },
      "name" : "MDT-beslutning ikke fulgt; årsag",
      "description" : "Årsagen til hvorfor MDT-beslutning ikke er fuldt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MeasurementDevices.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MeasurementDevices"
      },
      "name" : "Measurement devices",
      "description" : "Measurement devices",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MedicalFixationClosing.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MedicalFixationClosing"
      },
      "name" : "Medical fixation and closing",
      "description" : "Medical fixation and closing",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MedicalScanningTypes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MedicalScanningTypes"
      },
      "name" : "Medical scanning types",
      "description" : "Medical scanning types",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MedicalTreatmentDuration.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MedicalTreatmentDuration"
      },
      "name" : "Medical treatment duration",
      "description" : "Medical treatment duration",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MedicalTreatmentAdministrationType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MedicalTreatmentAdministrationType"
      },
      "name" : "Medical treatment: Medication administration",
      "description" : "Medical treatment: Medication administration",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MedicalTreatmentStartOf.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MedicalTreatmentStartOf"
      },
      "name" : "Medical treatment: when did the treatment begin",
      "description" : "Medical treatment: when did the treatment begin compared to operation/procedure",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MedicationName.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MedicationName"
      },
      "name" : "Medication name",
      "description" : "Medication name",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AdministrationType.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AdministrationType"
      },
      "name" : "Medicin administration Type",
      "description" : "Medicin administration Type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MedicinDANARREST.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MedicinDANARREST"
      },
      "name" : "Medicin givet ved hjertestop",
      "description" : "Mediciin givet ved behandling i DANARREST specialet",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MedicinDANARREST.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MedicinDANARREST"
      },
      "name" : "Medicin givet ved hjertestop",
      "description" : "Mediciin givet ved behandling i DANARREST specialet",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MedicinPraeparatDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MedicinPraeparatDSR"
      },
      "name" : "Medicin præparat (DSR)",
      "description" : "Medicin præparat (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MedicinVarighedDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MedicinVarighedDSR"
      },
      "name" : "Medicin varighed (DSR)",
      "description" : "Medicin varighed (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MedicinalBehandlingPaabegyndtDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MedicinalBehandlingPaabegyndtDHR"
      },
      "name" : "Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR]",
      "description" : "Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Medicine.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Medicine"
      },
      "name" : "Medicine",
      "description" : "Medicine",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MenisklaesionBehandlingDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MenisklaesionBehandlingDKRR"
      },
      "name" : "Menisklæsion, behandling (DKRR)",
      "description" : "Menisklæsion, behandling (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MenisklaesionMedialLateralDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MenisklaesionMedialLateralDKRR"
      },
      "name" : "Menisklæsion, medial/lateral (DKRR)",
      "description" : "Menisklæsion, medial/lateral (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MenisklaesionTypeDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MenisklaesionTypeDKRR"
      },
      "name" : "Menisklæsion, type (DKRR)",
      "description" : "Menisklæsion, type (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MentalDeclaration.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MentalDeclaration"
      },
      "name" : "Mental declaration",
      "description" : "Mental declaration",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MeshFikseringDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MeshFikseringDHDB"
      },
      "name" : "Mesh fiksering (DHDB)",
      "description" : "Mesh fiksering (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MeshPlacement.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MeshPlacement"
      },
      "name" : "Mesh placement",
      "description" : "Mesh placement",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MeshPlaceringDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MeshPlaceringDHDB"
      },
      "name" : "Mesh placering (DHDB)",
      "description" : "Mesh Placering (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MeshTechnique.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MeshTechnique"
      },
      "name" : "Mesh technique",
      "description" : "Mesh technique",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MeshTeknikDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MeshTeknikDHDB"
      },
      "name" : "Mesh teknik (DHDB)",
      "description" : "Mesh teknik (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MeshType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MeshType"
      },
      "name" : "Mesh type",
      "description" : "Mesh type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MeshTypeIngvinalhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MeshTypeIngvinalhernieDHDB"
      },
      "name" : "Mesh type - Ingvinalhernie (DHDB)",
      "description" : "Mesh type - Ingvinalhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MeshTypeVentralhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MeshTypeVentralhernieDHDB"
      },
      "name" : "Mesh type - Ventralhernie (DHDB)",
      "description" : "Mesh type - Ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MLInstabilitetDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MLInstabilitetDKR"
      },
      "name" : "ML-instabilitet (DKR)",
      "description" : "ML-instabilitet (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ModifiedRaymondRoyKlassification.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ModifiedRaymondRoyKlassification"
      },
      "name" : "Modified Raymond-Roy klassifikation (MRRC)",
      "description" : "Modified Raymond-Roy klassifikation (MRRC)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MTICIClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MTICIClassification"
      },
      "name" : "Modified treatment in cerebral ischemia (mTICI) score",
      "description" : "Modified treatment in cerebral ischemia (mTICI) score; Link: https://radiopaedia.org/articles/modified-treatment-in-cerebral-ischaemia-mtici-score",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MolecularRemission.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MolecularRemission"
      },
      "name" : "Molecular remission (MR)",
      "description" : "Molekylær remission (MR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MolecularRemission.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MolecularRemission"
      },
      "name" : "Molecular remission (MR)",
      "description" : "Molecular remission (MR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MolecurlarBiologyExamination.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MolecurlarBiologyExamination"
      },
      "name" : "Molekylærbiologiske undersøgelses resultat",
      "description" : "Molekylærbiologiske undersøgelses resultat eller karyotyp",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MorsDiagnosegrupper.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MorsDiagnosegrupper"
      },
      "name" : "Mors Diagnosegrupper (DNSL)",
      "description" : "Vurdering af en given behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MorsDiagnosegrupper.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MorsDiagnosegrupper"
      },
      "name" : "Mors Diagnosegrupper (DNSL)",
      "description" : "Mors Diagnosegrupper (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MorsDiagnoseForskelligtDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MorsDiagnoseForskelligtDNSL"
      },
      "name" : "Mors Diagnosekode - Forskelligt (DNSL)",
      "description" : "Mors Diagnosekode - Forskelligt (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MorsDiagnoseInfektionerDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MorsDiagnoseInfektionerDNSL"
      },
      "name" : "Mors Diagnosekode - Infektioner (DNSL)",
      "description" : "Mors Diagnosekode - Infektioner (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MorsDiagnoseKardialDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MorsDiagnoseKardialDNSL"
      },
      "name" : "Mors Diagnosekode - Kardial (DNSL)",
      "description" : "Mors Diagnosekode - Kardiale årsager (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MorsDiagnoseLeverDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MorsDiagnoseLeverDNSL"
      },
      "name" : "Mors Diagnosekode - Lever (DNSL)",
      "description" : "Mors Diagnosekode - Leverlidelser (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MorsDiagnoseSocialtDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MorsDiagnoseSocialtDNSL"
      },
      "name" : "Mors Diagnosekode - Socialt (DNSL)",
      "description" : "Mors Diagnosekode - Socialt (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MorsDiagnoseUlykkeDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MorsDiagnoseUlykkeDNSL"
      },
      "name" : "Mors Diagnosekode - Ulykke (DNSL)",
      "description" : "Mors Diagnosekode - Ulykke (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MorsDiagnoseVaskulaerDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MorsDiagnoseVaskulaerDNSL"
      },
      "name" : "Mors Diagnosekode - Vaskulær (DNSL)",
      "description" : "Mors Diagnosekode - Vaskulære årsager (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MorsDiagnosekoder.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MorsDiagnosekoder"
      },
      "name" : "Mors Diagnosekoder (DNSL)",
      "description" : "Mors Diagnosekoder (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MTICIReperfusionsgrad.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MTICIReperfusionsgrad"
      },
      "name" : "mTICI reperfusionsgrad",
      "description" : "Reperfusionsgrad ved brug af Modified treatment in cerebral ischemia (mTICI).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MuligVanskeligUmulig.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MuligVanskeligUmulig"
      },
      "name" : "Mulig-Vanskelig-Umulig",
      "description" : "Vurdering af en given behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MuligVanskeligUmulig.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MuligVanskeligUmulig"
      },
      "name" : "Mulig-Vanskelig-Umulig",
      "description" : "Vurdering af behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MaaleEnhedHAEMA2.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MaaleEnhedHAEMA2"
      },
      "name" : "Måleenhed HÆMA-2",
      "description" : "Måleenheder HÆMA - udfaldsrum med 2 enheder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MaaleEnhedHAEMA3.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MaaleEnhedHAEMA3"
      },
      "name" : "Måleenhed HÆMA-3",
      "description" : "Måleenheder HÆMA - udfaldsrum med 3 enheder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MaaleEnheder.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MaaleEnheder"
      },
      "name" : "Måleenheder",
      "description" : "Enheder til dokumentation af mængde, vægt, længde mm.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MaaleudstyrDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MaaleudstyrDKRR"
      },
      "name" : "Måleudstyr (DKRR)",
      "description" : "Måleudstyr (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MaalingCalcium.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MaalingCalcium"
      },
      "name" : "Måling, calcium",
      "description" : "Måling, calcium",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Maengde.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Maengde"
      },
      "name" : "Mængde",
      "description" : "Angivelse af mængder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Maengder.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Maengder"
      },
      "name" : "Mængder",
      "description" : "Angivelse af mængder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NeoadjuverendeBehandling.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NeoadjuverendeBehandling"
      },
      "name" : "Neoadjuverende behandling DCCG",
      "description" : "Neoadjuverende behandling DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS10Dysartri.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS10Dysartri"
      },
      "name" : "NIHSS - 10. Dysartri",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 10. Dysartri (bed patienten læse forskellige ord)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS11EkstinktionInattention.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS11EkstinktionInattention"
      },
      "name" : "NIHSS - 11. Ekstinktion og inattention",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 11. Ekstinktion og inattention (tidligere ”neglekt”) (brug visuel eller sensorisk dobbeltsidig stimulation)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS1aBevidsthedsniveau.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS1aBevidsthedsniveau"
      },
      "name" : "NIHSS - 1a. Bevidsthedsniveau",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1a. Bevidsthedsniveau",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS1bBevidsthedsniveau.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS1bBevidsthedsniveau"
      },
      "name" : "NIHSS - 1b. Bevidsthedsniveau: spørgsmål",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1b. Bevidsthedsniveau: spørgsmål",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS1cBevidsthedsniveau.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS1cBevidsthedsniveau"
      },
      "name" : "NIHSS - 1c. Bevidsthedsniveau: ordrer",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1c. Bevidsthedsniveau: ordrer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS2Blik.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS2Blik"
      },
      "name" : "NIHSS - 2. Blik",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 2. Blik (kun horisontale øjenbevægelser)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS3Synsfelt.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS3Synsfelt"
      },
      "name" : "NIHSS - 3. Test af synsfelt",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 3. Test af synsfelt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS4Facialisparese.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS4Facialisparese"
      },
      "name" : "NIHSS - 4. Facialisparese",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 4. Facialisparese (bed patienten om at vise tænder/løfte øjenbryn og lukke øjnene fast i)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS5FunktionArm.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS5FunktionArm"
      },
      "name" : "NIHSS - 5. Motorisk funktion i arm",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 5. Motorisk funktion i arm",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS6FunktionBen.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS6FunktionBen"
      },
      "name" : "NIHSS - 6. Motorisk funktion i ben",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 6. Motorisk funktion i ben",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS7Ataksi.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS7Ataksi"
      },
      "name" : "NIHSS - 7. Ekstremitets ataksi",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 7. Ekstremitets ataksi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS8Sensibilitet.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS8Sensibilitet"
      },
      "name" : "NIHSS - 8. Sensibilitet",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 8. Sensibilitet (brug pinprick til at teste arme, ben, trunkus og ansigt - sammenlign side for side)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NIHSS9Sprog.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NIHSS9Sprog"
      },
      "name" : "NIHSS - 9. Sprog",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 9. Sprog (bed patienten beskrive billeder, benævne genstande, læse sætninger)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NYHA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NYHA"
      },
      "name" : "NYHA klasser - hjertesvigt",
      "description" : "Udfald for NYHA klasser",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NYHA.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NYHA"
      },
      "name" : "NYHA klasser - hjertesvigt",
      "description" : "The New York Heart Association (NYHA) Functional Classification link:https://www.heart.org/en/health-topics/heart-failure/what-is-heart-failure/classes-of-heart-failure",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ObservationPatient.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ObservationPatient"
      },
      "name" : "Observation af patienten",
      "description" : "Observation af patienten indsamlet via",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ObservationAfdeling.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ObservationAfdeling"
      },
      "name" : "Observation afdeling",
      "description" : "Observation af patienten på egen eller anden afdeling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Observationssted.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Observationssted"
      },
      "name" : "Observationssted",
      "description" : "Sted hvor anæstesien observeres",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ObservationsstedAN.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ObservationsstedAN"
      },
      "name" : "Observationssted anæstesi",
      "description" : "Observationssted anæstesi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ObservationsstedPO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ObservationsstedPO"
      },
      "name" : "Observationssted postoperativt",
      "description" : "Observationssted for postoperativ anæstesi observation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-OncologyTreatmentCurative.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/OncologyTreatmentCurative"
      },
      "name" : "Oncology Treatment (curative)",
      "description" : "Types of oncology treatments for curative treatment intention",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Onkologibehandling.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Onkologibehandling"
      },
      "name" : "Onkologibehandlinger",
      "description" : "Typer af onkologibehandlinger",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OnkologibehandlingerKurativ.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OnkologibehandlingerKurativ"
      },
      "name" : "Onkologibehandlinger (kurativ)",
      "description" : "Dette er alle typer af onkologibehandlinger for kurativ behandlingsintention",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OnkologibehandlingerAll.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OnkologibehandlingerAll"
      },
      "name" : "Onkologibehandlinger - alle",
      "description" : "Dette er alle typer af onkologibehandlinger",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OnkologiBehandlingsintention.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OnkologiBehandlingsintention"
      },
      "name" : "Onkologisk behandlingsintention",
      "description" : "Behandlingsintention for onkologiske forløb",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-OperatingRoom.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/OperatingRoom"
      },
      "name" : "Operating room, attributes",
      "description" : "Operating room, attributes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationerAktuelDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationerAktuelDKRR"
      },
      "name" : "Operation - aktuel (DKRR)",
      "description" : "Operation - aktuel (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationDanmarkUdlandetDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationDanmarkUdlandetDHR"
      },
      "name" : "Operation - Danmark/Udlandet (DHR)",
      "description" : "Operation - Danmark/Udlandet (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-OperationCanal.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/OperationCanal"
      },
      "name" : "Operation canal",
      "description" : "Operation canal",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationIkkeGennemfortDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationIkkeGennemfortDCCG"
      },
      "name" : "Operation Ikke Gennemført (DCCG)",
      "description" : "Operation Ikke Gennemført: Årsag (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationKanalAntalDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationKanalAntalDKRR"
      },
      "name" : "Operation kanal - antal (DKRR)",
      "description" : "Operation kanal - antal (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationKanalFemurPlaceringDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationKanalFemurPlaceringDKRR"
      },
      "name" : "Operation kanal - femur, placering (DKRR)",
      "description" : "Operation kanal - femur, placering (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-OperationType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/OperationType"
      },
      "name" : "Operation type",
      "description" : "Operation type (primary, revision, extirpation)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationerDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationerDKRR"
      },
      "name" : "Operationer (DKRR)",
      "description" : "Operationer (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Operationserfaring.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Operationserfaring"
      },
      "name" : "Operationserfaring",
      "description" : "Operationserfaring for operatører og assistenter",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Operationserfaring.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Operationserfaring"
      },
      "name" : "Operationserfaring",
      "description" : "Operationserfaring for operatører og assistenter",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OpkodeGenitalProlapsDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OpkodeGenitalProlapsDUGA"
      },
      "name" : "Operationskode - Genital prolaps (DUGA)",
      "description" : "Operationskode - Genital prolaps (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OpkodeUrinInkontinensDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OpkodeUrinInkontinensDUGA"
      },
      "name" : "Operationskode - Urin-inkontinens (DUGA)",
      "description" : "Operationskode - Urin-inkontinens (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OpkodeUrinGenitalDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OpkodeUrinGenitalDUGA"
      },
      "name" : "Operationskode - Urin-inkontinens og genital prolaps (DUGA)",
      "description" : "Operationskode - Urin-inkontinens og genital prolaps (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationspaaklaedningDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationspaaklaedningDHR"
      },
      "name" : "Operationspåklædning [DHR]",
      "description" : "Operationspåklædning [DHR]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Operationsside.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Operationsside"
      },
      "name" : "Operationsside (højre/venstre)",
      "description" : "Operationsside (højre/venstre)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationssideKAR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationssideKAR"
      },
      "name" : "Operationsside (højre/venstre/centralt) (KAR)",
      "description" : "Operationsside (højre/venstre/centralt) (KAR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationssideHoejreVenstreDobbeltsidig.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationssideHoejreVenstreDobbeltsidig"
      },
      "name" : "Operationsside (højre/venstre/dobbeltsidig)",
      "description" : "Operationsside (højre/venstre/dobbeltsidig)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationsstueDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationsstueDKR"
      },
      "name" : "Operationsstue (DKR)",
      "description" : "Operationsstue (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationsstueFlowKonventionel.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationsstueFlowKonventionel"
      },
      "name" : "Operationsstue (flow/konventionel)",
      "description" : "Operationsstue (flow/konventionel)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationssaarInfektionKAR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationssaarInfektionKAR"
      },
      "name" : "Operationssår infektion (KAR)",
      "description" : "Operationssår infektion (KAR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationssaarKomplikationerKAR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationssaarKomplikationerKAR"
      },
      "name" : "Operationssår komplikationer (KAR)",
      "description" : "Operationssår komplikationer (KAR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationstypeFoersteRecidiv.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationstypeFoersteRecidiv"
      },
      "name" : "Operationstype (første gangs/recidiv)",
      "description" : "Operationstype (første gangs/recidiv)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationstypePrimaerRevision.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationstypePrimaerRevision"
      },
      "name" : "Operationstype (primær/revision)",
      "description" : "Operationstype (primær/revision)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationstypePrimaerSekundaer.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationstypePrimaerSekundaer"
      },
      "name" : "Operationstype (primær/sekundær)",
      "description" : "Operationstype (primær/sekundær)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperationstypeLYFO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperationstypeLYFO"
      },
      "name" : "Operationstype - kirurgi (LYFO)",
      "description" : "Operationstype - kirurgi (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperativAdgangDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperativAdgangDKR"
      },
      "name" : "Operativ adgang (DKR)",
      "description" : "Operativ adgang (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperativProcedureKategoriDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperativProcedureKategoriDCCG"
      },
      "name" : "Operativ Procedurekategori (DCCG)",
      "description" : "Operativ Procedurekategori (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperativProcedureKategoriKolonDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperativProcedureKategoriKolonDCCG"
      },
      "name" : "Operativ Procedurekategori (Kolon) (DCCG)",
      "description" : "Operativ Procedurekategori (Kolon) (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperativProcedureKategoriRektumDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperativProcedureKategoriRektumDCCG"
      },
      "name" : "Operativ procedurekategori (Rektum) (DCCG)",
      "description" : "Operativ procedurekategori (Rektum) (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperativeAdgangDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperativeAdgangDHR"
      },
      "name" : "Operative adgang (DHR)",
      "description" : "Operative adgang (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperativtFundIngvinalhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperativtFundIngvinalhernieDHDB"
      },
      "name" : "Operativt fund - ingvinalhernie (DHDB)",
      "description" : "Operativt fund - ingvinalhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OperativtSigteDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OperativtSigteDCCG"
      },
      "name" : "Operativt Sigte DCCG",
      "description" : "Operativt Sigte DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-FollowUp.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/FollowUp"
      },
      "name" : "Opfølgning - intervaller",
      "description" : "Opfølgningsperiode, dage, uger, måneder, år",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FollowUp25Y.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FollowUp25Y"
      },
      "name" : "Opfølgning 2/5 år",
      "description" : "Opfølgning efter 2 eller 5 år",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-OsteotomiTypeAlmindeligExtendedDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/OsteotomiTypeAlmindeligExtendedDHR"
      },
      "name" : "Osteotomi type - Almindelig/Extended (DHR)",
      "description" : "Osteotomi type - Almindelig/Extended (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ParagrafferRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ParagrafferRETSPSYK"
      },
      "name" : "Paragraffer (RETSPSYK)",
      "description" : "Paragraffer (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Paragraph.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Paragraph"
      },
      "name" : "Paragraph",
      "description" : "Paragraph",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentResponseALD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentResponseALD"
      },
      "name" : "Patient respons på behandling (ALD)",
      "description" : "Hvordan reagerer patienten på behandlingen [ALD]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentResponseDAMYDA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentResponseDAMYDA"
      },
      "name" : "Patient respons på behandling (DAMYDA)",
      "description" : "Hvordan reagerer patienten på behandlingen [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDDMPNDiagnose.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDDMPNDiagnose"
      },
      "name" : "Patobank SNOMED DMPN Diagnose",
      "description" : "DMPN diagnoser (Patobank SNOMED)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDpTNMpM.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDpTNMpM"
      },
      "name" : "Patobank SNOMED: pTNM klassifikation, pM",
      "description" : "SNOMED koderne relevante pM tillægskoder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDpTNMpN.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDpTNMpN"
      },
      "name" : "Patobank SNOMED: pTNM klassifikation, pN",
      "description" : "SNOMED koderne relevante pN tillægskoder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDpTNMpT.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDpTNMpT"
      },
      "name" : "Patobank SNOMED: pTNM klassifikation, pT",
      "description" : "SNOMED koderne relevante pT tillægskoder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDDiagnoserLYFO2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDDiagnoserLYFO2026"
      },
      "name" : "PatobankSNOMED - Diagnoser (LYFO)",
      "description" : "PatobankSNOMED - Diagnoser (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDDiagnoserLYFO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDDiagnoserLYFO"
      },
      "name" : "PatobankSNOMED - Diagnoser (LYFO) (retired)",
      "description" : "PatobankSNOMED - Diagnoser (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PatobankSNOMEDCytogenetikMDS.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PatobankSNOMEDCytogenetikMDS"
      },
      "name" : "PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS)",
      "description" : "PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PerforationDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PerforationDUGA"
      },
      "name" : "Perforation (DUGA)",
      "description" : "Procedurekode - Perforation (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-PerformanceStatusScore.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/PerformanceStatusScore"
      },
      "name" : "Performance Status score (ECOG/WHO/Zubrod)",
      "description" : "Score udviklet til performance for cancerpatienter. Kaldes både ECOG, WHO eller Zubrod. Link: https://ecog-acrin.org/resources/ecog-performance-status/",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Periods.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Periods"
      },
      "name" : "Perioder",
      "description" : "Kalendermæssige perioder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PerioderMK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PerioderMK"
      },
      "name" : "Perioder Måned / Kvartal",
      "description" : "Perioder Måned / Kvartal",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PeritonealdefektLukningDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PeritonealdefektLukningDHDB"
      },
      "name" : "Peritonealdefekt lukning (DHDB)",
      "description" : "Peritonealdefekt lukning (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PeroperativMetastasebehandling.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PeroperativMetastasebehandling"
      },
      "name" : "Peroperativ metastasebehandling",
      "description" : "Peroperativ metastasebehandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-PersonFamilyRelation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/PersonFamilyRelation"
      },
      "name" : "Person relation; relation to another person",
      "description" : "Person relation; relation to another person",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PivotShift.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PivotShift"
      },
      "name" : "Pivot Shift",
      "description" : "Pivot Shift",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-PivotShiftGrading.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/PivotShiftGrading"
      },
      "name" : "Pivot Shift grading",
      "description" : "Pivot Shift grading",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-DeathPlace.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/DeathPlace"
      },
      "name" : "Place of death",
      "description" : "Place of death",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BrusklaesionPlaceringDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BrusklaesionPlaceringDKRR"
      },
      "name" : "Placering af brusklæsioner (DKRR)",
      "description" : "Placering af brusklæsioner (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ArtrosePlacering.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ArtrosePlacering"
      },
      "name" : "Placering af indikationsgivne artrose",
      "description" : "Placering af indikationsgivne artrose",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Respiration.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Respiration"
      },
      "name" : "Plan for eller støtte til luftvejsassistance",
      "description" : "Mulige indgreb vedr luftvejsstøtte",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-SP-PlanDefinition-urlversion.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/SP-PlanDefinition-urlversion"
      },
      "name" : "PlanDefinition url+version",
      "description" : "SearchParameter to match PlanDefinition by both url and version",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-PlanDefinitionLatest.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/PlanDefinitionLatest"
      },
      "name" : "PlanDefinitionLatest",
      "description" : "Search PlanDefinition for 'latest' extension",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-PlanDefinitionUuid.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/PlanDefinitionUuid"
      },
      "name" : "PlanDefinitionUuid",
      "description" : "Search by uuid in PlanDefinition",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentScheduledDAMYDA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentScheduledDAMYDA"
      },
      "name" : "Planlagt behandling (DAMYDA)",
      "description" : "Planlagt behandling (DAMYDA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentScheduledALD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentScheduledALD"
      },
      "name" : "Planlagt eller iværksat behandling",
      "description" : "Planlagt eller iværksat behandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PlasmaDiagnose.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PlasmaDiagnose"
      },
      "name" : "Plasma Analyse - kræft diagnose",
      "description" : "Plasma analyse - kræft diagnose kriterier [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PlasmaDiagnose202412.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PlasmaDiagnose202412"
      },
      "name" : "Plasma Analyse - kræft diagnose 202412",
      "description" : "Plasma analyse - kræft diagnose kriterier [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MComponentTypeDAMYDA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MComponentTypeDAMYDA"
      },
      "name" : "Plasma M komponent (Myeloma protein) type",
      "description" : "Plasma M komponent (Myeloma protein) type [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-EndoskopiskUdseende.html"
      }],
      "reference" : {
        "reference" : "ValueSet/EndoskopiskUdseende"
      },
      "name" : "Polyppens endoskopiske udseende",
      "description" : "Polyppens endoskopiske udseende",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-POPQAaApDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/POPQAaApDUGA"
      },
      "name" : "POP-Q undersøgelse Aa+Ap (DUGA)",
      "description" : "Nedsynkning - POP-Q undersøgelse Aa+Ap (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-POPQBaDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/POPQBaDUGA"
      },
      "name" : "POP-Q undersøgelse Ba (DUGA)",
      "description" : "Nedsynkning - POP-Q undersøgelse Ba (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-POPQBpDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/POPQBpDUGA"
      },
      "name" : "POP-Q undersøgelse Bp (DUGA)",
      "description" : "Nedsynkning - POP-Q undersøgelse Bp (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-POPQCDDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/POPQCDDUGA"
      },
      "name" : "POP-Q undersøgelse C+D (DUGA)",
      "description" : "Nedsynkning - POP-Q undersøgelse C+D (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-POPQGhDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/POPQGhDUGA"
      },
      "name" : "POP-Q undersøgelse Gh (DUGA)",
      "description" : "Nedsynkning - POP-Q undersøgelse Gh (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-POPQKompartmentDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/POPQKompartmentDUGA"
      },
      "name" : "POP-Q undersøgelse Kompartment (DUGA)",
      "description" : "Nedsynkning - POP-Q undersøgelse Kompartment (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-POPQPbDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/POPQPbDUGA"
      },
      "name" : "POP-Q undersøgelse Pb (DUGA)",
      "description" : "Nedsynkning - POP-Q undersøgelse Pb (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-POPQTvlDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/POPQTvlDUGA"
      },
      "name" : "POP-Q undersøgelse Tvl (DUGA)",
      "description" : "Nedsynkning - POP-Q undersøgelse Tvl (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HeartAttackSTEMIPosition.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HeartAttackSTEMIPosition"
      },
      "name" : "Position af STEMI hjertestop",
      "description" : "En mere detailiert positions beskrivelse af hjertestop",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ComplicationPO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ComplicationPO"
      },
      "name" : "Postoperativ komplikatione",
      "description" : "Postoperative komplikationer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ComplicationPO2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ComplicationPO2026"
      },
      "name" : "Postoperativ komplikationer 2026",
      "description" : "Postoperative komplikationer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PostoperativeKomplikationerDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PostoperativeKomplikationerDCCG"
      },
      "name" : "Postoperative komplikationer (DCCG)",
      "description" : "Postoperative komplikationer (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PreoperativTemplating.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PreoperativTemplating"
      },
      "name" : "Preoperativ templating",
      "description" : "Preoperativ templating (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-PreoperativTemplating.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/PreoperativTemplating"
      },
      "name" : "Preoperativ templating",
      "description" : "Preoperativ templating",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TumorLokalisationDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TumorLokalisationDCCG"
      },
      "name" : "Primærtumors lokalisation DCCG",
      "description" : "Primærtumors lokalisation DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Priority.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Priority"
      },
      "name" : "Prioritering",
      "description" : "Patientens prioriteringsbehov",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Priority.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Priority"
      },
      "name" : "Priority",
      "description" : "Vurdering af patientens behov",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ProcedureDuration.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ProcedureDuration"
      },
      "name" : "Procedure duration: Codes for different durations",
      "description" : "Procedure duration: Codes for different durations",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureIkkeGennemfortDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureIkkeGennemfortDCCG"
      },
      "name" : "Procedure Ikke Gennemført DCCG",
      "description" : "Procedure Ikke Gennemført DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ProcedureNotCompleted.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ProcedureNotCompleted"
      },
      "name" : "Procedure not completed; cause",
      "description" : "Procedure not completed; cause",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ProcedureType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ProcedureType"
      },
      "name" : "Procedure type: Codes for different durations",
      "description" : "Procedure type: Codes for different durations",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureVarighed15min.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureVarighed15min"
      },
      "name" : "Procedure varighed; over/under 15 min.",
      "description" : "Procedure varighed; over/under 15 min.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureVarighed5min.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureVarighed5min"
      },
      "name" : "Procedure varighed; over/under 5 min.",
      "description" : "Procedure varighed; over/under 5 min.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ProcedureUrogyn.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ProcedureUrogyn"
      },
      "name" : "Procedurekoder - Urogynækologi (DUGA)",
      "description" : "Procedurekoder - Urogynækolog (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedurerAndreDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedurerAndreDKRR"
      },
      "name" : "Procedurer, andre (DKRR)",
      "description" : "Procedurer, andre (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureTypeDCCG1.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureTypeDCCG1"
      },
      "name" : "Proceduretyper til DCCG 1",
      "description" : "Proceduretyper til DCCG 1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureTypeDCCG2.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureTypeDCCG2"
      },
      "name" : "Proceduretyper til DCCG 2",
      "description" : "Proceduretyper til DCCG 2",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureTypeDCCG3.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureTypeDCCG3"
      },
      "name" : "Proceduretyper til DCCG 3",
      "description" : "Proceduretyper til DCCG 3",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Profylaksebehandling.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Profylaksebehandling"
      },
      "name" : "Profylaksebehandling",
      "description" : "Profylaksebehandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProgressionCML.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProgressionCML"
      },
      "name" : "Progression CML",
      "description" : "Progression CML",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Prosthesis.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Prosthesis"
      },
      "name" : "Prosthesis",
      "description" : "Prosthesis",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProteseDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProteseDSR"
      },
      "name" : "Protese (DSR)",
      "description" : "Protese (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProteseFjernelseDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProteseFjernelseDHR"
      },
      "name" : "Protese fjernelse (DHR)",
      "description" : "Protese fjernelse (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProtesestatusDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProtesestatusDHR"
      },
      "name" : "Protesestatus (DHR)",
      "description" : "Protesestatus (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LokalStraaleterapi.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LokalStraaleterapi"
      },
      "name" : "Præoperativ lokal stråleterapi ved malign indikation for TES",
      "description" : "Præoperativ lokal stråleterapi ved malign indikation for TES",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PraeoperativMetastaseBehandlingDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PraeoperativMetastaseBehandlingDCCG"
      },
      "name" : "Præoperativ Metastasebehandling (DCCG)",
      "description" : "Præoperativ Metastasebehandling (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PraeoperativPlanlaegningDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PraeoperativPlanlaegningDSR"
      },
      "name" : "Præoperativ planlægning (DSR)",
      "description" : "Præoperativ planlægning (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PraeoperativUdrensningDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PraeoperativUdrensningDCCG"
      },
      "name" : "Præoperativ Udrensning (DCCG)",
      "description" : "Præoperativ Udrensning (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PTNMtype.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PTNMtype"
      },
      "name" : "pTNM type",
      "description" : "Typen af pTNM klassifikationen",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-PupilCondition.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/PupilCondition"
      },
      "name" : "Pupil condition",
      "description" : "Pupil condition",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Pupilforhold.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Pupilforhold"
      },
      "name" : "Pupilforhold",
      "description" : "Forholdet mellem pupillerne",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PaavirkningRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PaavirkningRETSPSYK"
      },
      "name" : "Påvirkning (RETSPSYK)",
      "description" : "Påvirkning (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-PaavirkningPaagaaendeRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/PaavirkningPaagaaendeRETSPSYK"
      },
      "name" : "Påvirkning Pågående (RETSPSYK)",
      "description" : "Påvirkning Pågående (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VasospasmerPaavisning.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VasospasmerPaavisning"
      },
      "name" : "Påvisning af vasospasme; metode",
      "description" : "Påvisning af vasospasme; metode",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-SP-Questionnaire-urlversion.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/SP-Questionnaire-urlversion"
      },
      "name" : "Questionnaire url+version",
      "description" : "SearchParameter to match Questionnaire by both url and version",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-QuestionnaireLatest.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/QuestionnaireLatest"
      },
      "name" : "QuestionnaireLatest",
      "description" : "Search Questionnaire for 'latest' extension",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-QuestionnaireResponseOnCarePlan.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/QuestionnaireResponseOnCarePlan"
      },
      "name" : "QuestionnaireResponseOnCarePlan",
      "description" : "Search by a QuestionnaireResponse reference for a CarePlan",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-QuestionnaireResponseResponsibleOnCarePlanSP.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/QuestionnaireResponseResponsibleOnCarePlanSP"
      },
      "name" : "QuestionnaireResponseResponsibleOnCarePlanSP",
      "description" : "Search a CarePlan for responsible SOR code on a QuestionnaireResponse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-QuestionnaireUuid.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/QuestionnaireUuid"
      },
      "name" : "QuestionnaireUuid",
      "description" : "Search by uuid in Questionnaire",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RKlassifikation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RKlassifikation"
      },
      "name" : "R-klassifikation",
      "description" : "R-klassifikation (Residual tumor)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RKlassifikationTilDegc.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RKlassifikationTilDegc"
      },
      "name" : "R-klassifikation til DEGC",
      "description" : "R-klassifikation (Residual tumor) til DEGC",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RadiationTherapyType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RadiationTherapyType"
      },
      "name" : "Radiation therapy type",
      "description" : "Radiation therapy type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Radioimmunoterapi.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Radioimmunoterapi"
      },
      "name" : "Radioimmunoterapi",
      "description" : "Radioimmunoterapi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RadiologicalBoneChanges.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RadiologicalBoneChanges"
      },
      "name" : "Radiological bone changes - Indication of changes in bones",
      "description" : "Radiological bone changes - Indication of changes in bones",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RaymondRoyClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RaymondRoyClassification"
      },
      "name" : "Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC)",
      "description" : "Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC); Link: https://radiopaedia.org/articles/raymondroy-occlusion-classification-of-intracranial-aneurysms-1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-MDTNotFollowed.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/MDTNotFollowed"
      },
      "name" : "Reasons for MDT-decision not followed",
      "description" : "Årsagen til hvorfor MDT-beslutning (Multidisciplinære Teamkonferencer) ikke er fuldt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ACTherapyNotGiven.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ACTherapyNotGiven"
      },
      "name" : "Reasons for not giving anticoagulation therapy",
      "description" : "Årsagen til hvorfor man har fravalgt antikoagulationsbehandling.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ActilyseNotGiven.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ActilyseNotGiven"
      },
      "name" : "Reasons for not giving total dose of actilyse",
      "description" : "Årsagen til hvorfor man ikke har givet totaldosis i.v. actilyse.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ProcedureReasons.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ProcedureReasons"
      },
      "name" : "Reasons for procedure",
      "description" : "Reasons for procedure",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ReferredFrom.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ReferredFrom"
      },
      "name" : "Referred from",
      "description" : "Referred from",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Regioner.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Regioner"
      },
      "name" : "Regioner",
      "description" : "Danske Regioner",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Regioner.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Regioner"
      },
      "name" : "Regioner",
      "description" : "Danske regioner",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RegistreringEksklusionHAEMA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RegistreringEksklusionHAEMA"
      },
      "name" : "Registrering - Eksklusionsårsag (HAEMA)",
      "description" : "Registrering - Eksklusionsårsag (HAEMA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Registry.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Registry"
      },
      "name" : "Registry - Unspecified codes",
      "description" : "Registry - Unspecified codes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IntubationRelaks.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IntubationRelaks"
      },
      "name" : "Relaksation til intubation",
      "description" : "Relaksation til intubation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-IntubationRelaks.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/IntubationRelaks"
      },
      "name" : "Relaksation til intubation",
      "description" : "Relaksation til intubation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DonorRelationship.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DonorRelationship"
      },
      "name" : "Relationen til doner",
      "description" : "Familie relation til donor",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-DonorRelationDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/DonorRelationDNSL"
      },
      "name" : "Relationen til donor (DNSL)",
      "description" : "Familie relation til donor (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ReoperationAarsagDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ReoperationAarsagDKRR"
      },
      "name" : "Reoperation årsager (DKRR)",
      "description" : "Årsager til reoperation indenfor 1 år (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ResectionCompletion.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ResectionCompletion"
      },
      "name" : "Resection completion; justification",
      "description" : "Resection completion; justification",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ResectionType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ResectionType"
      },
      "name" : "Resection type",
      "description" : "Resektionstype for kræft databaser (DEGC)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Resektionstype.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Resektionstype"
      },
      "name" : "Resektionstype",
      "description" : "Resektionstype for kræft databaser (DEGC)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ResidualTumorClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ResidualTumorClassification"
      },
      "name" : "Residual tumor (R) classification",
      "description" : "Residual tumor (R) classification. Link: https://acsjournals.onlinelibrary.wiley.com/doi/10.1002/cncr.10492",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ResidualTumorGrading.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ResidualTumorGrading"
      },
      "name" : "Residual Tumor Grading",
      "description" : "Gradering hvis der er registreret resttumor i histologisk klassifikation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlingsResponsEvalueringLYFO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlingsResponsEvalueringLYFO"
      },
      "name" : "Responsevaluering på behandling (LYFO)",
      "description" : "Responsevaluering på behandling (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ResultTest.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ResultTest"
      },
      "name" : "Result of test",
      "description" : "Result of test (for FISH, etc.)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Result.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Result"
      },
      "name" : "Resultat",
      "description" : "Resultat Negativ/Positiv",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FISHResult.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FISHResult"
      },
      "name" : "Resultat af FISH",
      "description" : "Resultat af FISH",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-FISHResult202502.html"
      }],
      "reference" : {
        "reference" : "ValueSet/FISHResult202502"
      },
      "name" : "Resultat af FISH 202502",
      "description" : "Resultat af FISH 202502 - Fjernet udgået udfald og tilføjet nye",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ResultTestFISH.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ResultTestFISH"
      },
      "name" : "ResultTest_FISH",
      "description" : "Resultat af test (FISH)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionDHR"
      },
      "name" : "Revision (DHR)",
      "description" : "Revision (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionHumerusKomponentDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionHumerusKomponentDSR"
      },
      "name" : "Revision - Humerus komponent (DSR)",
      "description" : "Revision - Humerus komponent (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionHumerusCavitasDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionHumerusCavitasDSR"
      },
      "name" : "Revision - Humerus/cavitas (DSR)",
      "description" : "Revision - Humerus/cavitas (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionIndikationDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionIndikationDHR"
      },
      "name" : "Revision, indikation (DHR)",
      "description" : "Revision, indikation (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionIndikationDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionIndikationDKR"
      },
      "name" : "Revision, indikation (DKR)",
      "description" : "Revision, indikation (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionIndikationDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionIndikationDSR"
      },
      "name" : "Revision, indikation (DSR)",
      "description" : "Revision, indikation (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionIndikationAseptiskDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionIndikationAseptiskDSR"
      },
      "name" : "Revision, indikation - Aseptisk løsning (DSR)",
      "description" : "Revision, indikation - Aseptisk løsning (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionStatusDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionStatusDKR"
      },
      "name" : "Revision, status (DKR)",
      "description" : "Revision, status (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionUdskiftningDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionUdskiftningDHR"
      },
      "name" : "Revision, udskiftning (DHR)",
      "description" : "Revision, udskiftning (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionAarsagDKRR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionAarsagDKRR"
      },
      "name" : "Revision, årsag (DKRR)",
      "description" : "Revision, årsag (DKRR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RevisionCause.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RevisionCause"
      },
      "name" : "Revision; cause",
      "description" : "Revision; cause",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RevisionIndication.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RevisionIndication"
      },
      "name" : "Revision; indication",
      "description" : "Revision; indication",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RevisionType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RevisionType"
      },
      "name" : "Revision; type",
      "description" : "Revision; type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RevisionstypeDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RevisionstypeDSR"
      },
      "name" : "Revisionstype (DSR)",
      "description" : "Revisionstype (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RisikofaktorerDMPN.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RisikofaktorerDMPN"
      },
      "name" : "Risikofaktorer DMPN",
      "description" : "Risikofaktorer - DMPN",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RisikovurderingRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RisikovurderingRETSPSYK"
      },
      "name" : "Risikovurdering (RETSPSYK)",
      "description" : "Risikovurdering (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RiskAssessment.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RiskAssessment"
      },
      "name" : "Risk assessment",
      "description" : "Risk assessment",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RiskFactors.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RiskFactors"
      },
      "name" : "Risk factors",
      "description" : "Risk factors",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RobotDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RobotDHDB"
      },
      "name" : "Robot (DHDB)",
      "description" : "Robot assisteret metode (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RobotDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RobotDKR"
      },
      "name" : "Robot (DKR)",
      "description" : "Robottyper til robot assisteret kirurgi (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RobotAssistDKR.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RobotAssistDKR"
      },
      "name" : "Robot (DKR)",
      "description" : "Robottyper til robot assisteret kirurgi (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Robot-DKR-2026-07.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Robot-DKR-2026-07"
      },
      "name" : "Robot (DKR)-2026-07",
      "description" : "Robottyper til robot assisteret kirurgi (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Ryger8uger.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Ryger8uger"
      },
      "name" : "Ryger op til 8 uger",
      "description" : "Ryger eller ophørt indenfor 8 uger",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Rygning.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Rygning"
      },
      "name" : "Rygning",
      "description" : "Udfald for rygning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RygningDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RygningDCCG"
      },
      "name" : "Rygning (DCCG)",
      "description" : "Udfald for rygning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RytmeDefibrilleringMetode.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RytmeDefibrilleringMetode"
      },
      "name" : "Rytme Defibrilleringsmetode",
      "description" : "Metode ved defibrillering af hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-RytmeAnalyseMetode.html"
      }],
      "reference" : {
        "reference" : "ValueSet/RytmeAnalyseMetode"
      },
      "name" : "RytmeAnalyseMetode",
      "description" : "Metode til analyse af hjerterytme",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSArmLift.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSArmLift"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Arm lift",
      "description" : "Scandinavian Stroke Scale (SSS) - Arm lift: Vurderes på begge arme, men der noteres kun i forhold til siden for en eventuel lammelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSConsciousness.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSConsciousness"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Consciousness",
      "description" : "Scandinavian Stroke Scale (SSS) - Consciousness: Svækket bevidsthed kan være udtryk for komplikationer som eksempelvis blødning eller ødem",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSEyeMotorSkills.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSEyeMotorSkills"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Eye motor skills",
      "description" : "Scandinavian Stroke Scale (SSS) - Eye motor skills: Øjendeviation er ligeledes et dårligt prognostisk tegn.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSFacialParesis.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSFacialParesis"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Facial paresis",
      "description" : "Scandinavian Stroke Scale (SSS) - Facial paresis: Kun en sikker facialisparese giver 0. Hvis man er i tvivl gives 2.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSHandshake.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSHandshake"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Handshake",
      "description" : "Scandinavian Stroke Scale (SSS) - Handshake: Vurderes på begge hænder, men der noteres kun i forhold til siden af en eventuel lammelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSLegLift.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSLegLift"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Leg lift",
      "description" : "Scandinavian Stroke Scale (SSS) - Leg lift: Vurderes på begge ben, men der noteres kun i forhold til siden for en eventuel lammelse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSOrientation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSOrientation"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Orientation",
      "description" : "Scandinavian Stroke Scale (SSS) - Orientation: Der spørges, om hvilken måned det er, hvilket hospital patienten er på, og patientens CPR-nr.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSSpeech.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSSpeech"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Speech",
      "description" : "Scandinavian Stroke Scale (SSS) - Speech: Talebesvær på grund af dysartri scorer 10. Kun hvis man er sikker på, at der er sproglige forstyrrelser scores 6, 3 eller 0.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SSSWalk.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SSSWalk"
      },
      "name" : "Scandinavian Stroke Scale (SSS) - Walk",
      "description" : "Scandinavian Stroke Scale (SSS) - Walk: Hvis patienten ikke kan gå, bedømmes om patienten kan sidde oprejst på sengekanten uden at støtte hænderne (3) eller ikke (0).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSArmloeft.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSArmloeft"
      },
      "name" : "Scandinavian Stroke Scale - Armløft",
      "description" : "Scandinavian Stroke Scale - Armløft",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSBenloeft.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSBenloeft"
      },
      "name" : "Scandinavian Stroke Scale - Benløft",
      "description" : "Scandinavian Stroke Scale - Benløft",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSBevidsthed.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSBevidsthed"
      },
      "name" : "Scandinavian Stroke Scale - Bevidsthed",
      "description" : "Scandinavian Stroke Scale - Bevidsthed",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSFacialisparese.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSFacialisparese"
      },
      "name" : "Scandinavian Stroke Scale - Facialisparese",
      "description" : "Scandinavian Stroke Scale - Facialisparese",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSGang.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSGang"
      },
      "name" : "Scandinavian Stroke Scale - Gang",
      "description" : "Scandinavian Stroke Scale - Gang",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSHaandtryk.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSHaandtryk"
      },
      "name" : "Scandinavian Stroke Scale - Håndtryk",
      "description" : "Scandinavian Stroke Scale - Håndtryk",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSOrientering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSOrientering"
      },
      "name" : "Scandinavian Stroke Scale - Orientering",
      "description" : "Scandinavian Stroke Scale - Orientering",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSTale.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSTale"
      },
      "name" : "Scandinavian Stroke Scale - Tale",
      "description" : "Scandinavian Stroke Scale - Tale",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SSSOejenmotorik.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SSSOejenmotorik"
      },
      "name" : "Scandinavian Stroke Scale - Øjenmotorik",
      "description" : "Scandinavian Stroke Scale - Øjenmotorik",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ScanningstyperCTMR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ScanningstyperCTMR"
      },
      "name" : "Scanningstyper; CT, MR",
      "description" : "Scanningstyper; CT, MR",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ScoreCentralBlock.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ScoreCentralBlock"
      },
      "name" : "Score ved central blokade",
      "description" : "Regional score ved anlæg af central nerveblokade",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ScoreTyperHOFTER.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ScoreTyperHOFTER"
      },
      "name" : "ScoreTyper HOFTER",
      "description" : "Score type brugt ved vurdering af funktionsniveau",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-cpr.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/cpr"
      },
      "name" : "Search Parameter - CPR for Patient",
      "description" : "Limit response of Patient to match given CPR.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-PDLatest.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/PDLatest"
      },
      "name" : "Search Parameter - Latest for PlanDefinitions",
      "description" : "Limit response of PlanDefinitions to match given Latest.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-QLatest.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/QLatest"
      },
      "name" : "Search Parameter - Latest for Questionnaires",
      "description" : "Limit response of Questionnaires to match given Latest.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-VSLatest.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/VSLatest"
      },
      "name" : "Search Parameter - Latest for ValueSets",
      "description" : "Limit response of ValueSets to match given Latest.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-questionnaire-response-reference.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/questionnaire-response-reference"
      },
      "name" : "Search Parameter - QuestionnaireReponse on CarePLan",
      "description" : "Find CarePlan which cointains a QuestionnaireResponse",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-questionnaire-response-responsible-sor.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/questionnaire-response-responsible-sor"
      },
      "name" : "Search Parameter - QuestionnaireReponse responsible sor on CarePLan",
      "description" : "Find CarePlan which cointains a QuestionnaireResponse with a specific responsible sorcode",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-sor.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/sor"
      },
      "name" : "Search Parameter - Sor Questionnaire",
      "description" : "Limit response of Questionnaires to match given SOR-codes.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-sorCode.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/sorCode"
      },
      "name" : "Search Parameter - Sor QuestionnaireResponse",
      "description" : "Limit response of QuestionnaireResponses to match given SOR-codes.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-SorAuthor.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/SorAuthor"
      },
      "name" : "Search Parameter - SOR-code author on a CarePlan",
      "description" : "Limit responses of CarePlan to match the author of the given SOR-code.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-PDUuid.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/PDUuid"
      },
      "name" : "Search Parameter - UUID for PlanDefinitions",
      "description" : "Limit response of PlanDefinitions to match given UUID.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-QUuid.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/QUuid"
      },
      "name" : "Search Parameter - UUID for Questionnaires",
      "description" : "Limit response of Questionnaires to match given UUID.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-access-sor-code.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/access-sor-code"
      },
      "name" : "Search Parameter - write or read access sor on CarePLan",
      "description" : "Search a CarePlan for readAccess or writeAccess SOR code. NOTE May match just the start of a string (https://build.fhir.org/codesystem-search-param-type.html#search-param-type-string)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-semver.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/semver"
      },
      "name" : "semver",
      "description" : "Composite search parameter representing semantic version (major.minor.patch) extracted from version field.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-semver-major.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/semver-major"
      },
      "name" : "semver-major",
      "description" : "Major version number extracted from version field.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-semver-minor.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/semver-minor"
      },
      "name" : "semver-minor",
      "description" : "Minor version number extracted from version field.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-semver-patch.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/semver-patch"
      },
      "name" : "semver-patch",
      "description" : "Patch version number extracted from version field.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MedicalScanningTypes.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MedicalScanningTypes"
      },
      "name" : "Skannings metoder",
      "description" : "Forskellige skannings metoder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MedicalScanningTypes202412.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MedicalScanningTypes202412"
      },
      "name" : "Skannings metoder 202412",
      "description" : "Forskellige skannings metoder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Skematype.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Skematype"
      },
      "name" : "Skematype",
      "description" : "Indleveringsform for eksterne skemaer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKSVentrikelEsophagus.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKSVentrikelEsophagus"
      },
      "name" : "SKS: Anatomisk lokation for ventrikel/esophagus",
      "description" : "SKS koderne for den anatomiske lokation for ventrikel/esophagus",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKSApopleksiDiagnoser.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKSApopleksiDiagnoser"
      },
      "name" : "SKS: Apopleksi diagnoser",
      "description" : "SKS koderne relevante Apopleksi databasen (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKScTNMcM.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKScTNMcM"
      },
      "name" : "SKS: cTNM klassifikation, cM",
      "description" : "SKS koderne relevante cM tillægskoder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKScTNMcN.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKScTNMcN"
      },
      "name" : "SKS: cTNM klassifikation, cN",
      "description" : "SKS koderne relevante cN tillægskoder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKScTNMcT.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKScTNMcT"
      },
      "name" : "SKS: cTNM klassifikation, cT",
      "description" : "SKS koderne relevante cT tillægskoder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKShjertesvigtDHD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKShjertesvigtDHD"
      },
      "name" : "SKS: hjertesvigt til DHD",
      "description" : "SKS koder relevante for DHD",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKSOperationerKAR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKSOperationerKAR"
      },
      "name" : "SKS: Operationer (KAR)",
      "description" : "SKS: Operationer (KAR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKSSymptomatiskAsymptomatisk.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKSSymptomatiskAsymptomatisk"
      },
      "name" : "SKS: Symptomatisk/Asymptomatisk koder",
      "description" : "SKS koderne for symptomatisk/asymptomatisk",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SKSUdskrivningsdiagnoserTrombolyse.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SKSUdskrivningsdiagnoserTrombolyse"
      },
      "name" : "SKS: Udskrivningsiagnoser for Trombolyse (DAP)",
      "description" : "SKS koderne relevante for Trombolyse (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SlyngeDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SlyngeDUGA"
      },
      "name" : "Slynge (DUGA)",
      "description" : "Slynge (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SlyngeDUGA.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SlyngeDUGA"
      },
      "name" : "Slynge - Urogynækologi (DUGA)",
      "description" : "Slynge - Urogynækologi (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SmerteKvalme.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SmerteKvalme"
      },
      "name" : "Smerter og kvalme",
      "description" : "Smerter og kvalme målt i forskellige situationer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Smoking.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Smoking"
      },
      "name" : "Smoking",
      "description" : "Healthfactor smoking",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SNOMEDCT.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SNOMEDCT"
      },
      "name" : "SNOMED-CT",
      "description" : "SNOMED-CT - Codes used in databases. Link: https://browser.ihtsdotools.org/",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SORAfdelingerDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SORAfdelingerDNSL"
      },
      "name" : "SOR: Afdelinger (DNSL)",
      "description" : "SOR: Afdelinger Nyresvigt (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SORAfdelingerHaema.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SORAfdelingerHaema"
      },
      "name" : "SOR: Afdelinger (HÆMA)",
      "description" : "SOR: Afdelinger (HÆMA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SORAfdelingerUHDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SORAfdelingerUHDNSL"
      },
      "name" : "SOR: Afdelinger Universitetshospitaler (DNSL)",
      "description" : "SOR: Afdelinger Nyresvigt på nniversitetshospitaler (DNSL)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SORafdSkema3Duga.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SORafdSkema3Duga"
      },
      "name" : "SOR: afd_Skema3DUGA (DUGA)",
      "description" : "SOR: afd_Skema3DUGA (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SORNeurokirurgiskeAfdelingerDAP.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SORNeurokirurgiskeAfdelingerDAP"
      },
      "name" : "SOR: Neurokirurgiske afdelinger (DAP)",
      "description" : "SOR: Neurokirurgiske afdelinger (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SORNeurologiskeAfdelingerDAP.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SORNeurologiskeAfdelingerDAP"
      },
      "name" : "SOR: Neurologiske afdelinger (DAP)",
      "description" : "SOR: Neurologiske afdelinger (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SOROverflytningRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SOROverflytningRETSPSYK"
      },
      "name" : "SOR: Overflytning (RETSPSYK)",
      "description" : "SOR: Overflytning (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SOROverflytningRETSPSYKHS.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SOROverflytningRETSPSYKHS"
      },
      "name" : "SOR: Overflytning Hovedstaden (RETSPSYK)",
      "description" : "SOR: Overflytning Hovedstaden (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SOROverflytningRETSPSYKMJ.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SOROverflytningRETSPSYKMJ"
      },
      "name" : "SOR: Overflytning Midtjylland (RETSPSYK)",
      "description" : "SOR: Overflytning Midtjylland (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SOROverflytningRETSPSYKNJ.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SOROverflytningRETSPSYKNJ"
      },
      "name" : "SOR: Overflytning Nordjylland (RETSPSYK)",
      "description" : "SOR: Overflytning Nordjylland (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SOROverflytningRETSPSYKSJ.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SOROverflytningRETSPSYKSJ"
      },
      "name" : "SOR: Overflytning Sjælland (RETSPSYK)",
      "description" : "SOR: Overflytning Sjælland (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SOROverflytningRETSPSYKSD.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SOROverflytningRETSPSYKSD"
      },
      "name" : "SOR: Overflytning Syddanmark (RETSPSYK)",
      "description" : "SOR: Overflytning Syddanmark (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SORTrombolyseenhedDAP.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SORTrombolyseenhedDAP"
      },
      "name" : "SOR: Trombolyseenhed (DAP)",
      "description" : "SOR: Trombolyseenhed (DAP)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-SorQuestionnaire.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/SorQuestionnaire"
      },
      "name" : "SorQuestionnaire",
      "description" : "Search By SOR in Questionnaire",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-SorQuestionnaireResponse.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/SorQuestionnaireResponse"
      },
      "name" : "SorQuestionnaireResponse",
      "description" : "Search By SOR in Questionnaire",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticSpecificerFund.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticSpecificerFund"
      },
      "name" : "Specificer Cytogenetiske Fund",
      "description" : "Specificer Cytogenetiske Fund",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ReferredForTraining.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ReferredForTraining"
      },
      "name" : "Specifikation of where the paitent is referred to for physical training",
      "description" : "Uddybning af hvor patienten er henvist til fysisk træning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Splenomegali.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Splenomegali"
      },
      "name" : "Splenomegali, udvikling og konstatering",
      "description" : "Splenomegali, udvikling og konstatering",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CytogeneticStemCellType.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CytogeneticStemCellType"
      },
      "name" : "Stamcelle type",
      "description" : "Hvor kommer stamcellerne fra",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Status.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Status"
      },
      "name" : "Status",
      "description" : "Status",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-StemCellType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/StemCellType"
      },
      "name" : "Stem cell type",
      "description" : "Stem cell type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-StemkarakteristikDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/StemkarakteristikDSR"
      },
      "name" : "Stemkarakteristik (DSR)",
      "description" : "Stemkarakteristik (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-StemlaengdeDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/StemlaengdeDSR"
      },
      "name" : "Stemlængde (DSR)",
      "description" : "Stemlængde (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-StomiTypeDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/StomiTypeDHDB"
      },
      "name" : "Stomi type (DHDB)",
      "description" : "Stomi type (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-StraffelovsparagrafRETSPSYK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/StraffelovsparagrafRETSPSYK"
      },
      "name" : "Straffelovsparagraf (RETSPSYK)",
      "description" : "Straffelovsparagraf (RETSPSYK)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-StraalebehandlingTA.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/StraalebehandlingTA"
      },
      "name" : "Strålebehandling mål",
      "description" : "Mål for strålebehandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-StraalebehandlingMaal.html"
      }],
      "reference" : {
        "reference" : "ValueSet/StraalebehandlingMaal"
      },
      "name" : "Strålebehandlingens mål",
      "description" : "Alle mål for strålebehandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-StraalebehandlingTAAll.html"
      }],
      "reference" : {
        "reference" : "ValueSet/StraalebehandlingTAAll"
      },
      "name" : "Strålebehandlinger mål - alle",
      "description" : "Alle mål for strålebehandling",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-StraaleterapiLYFO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/StraaleterapiLYFO"
      },
      "name" : "Stråleterapi (LYFO)",
      "description" : "Stråleterapi LYFO (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SubscapularisDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SubscapularisDSR"
      },
      "name" : "Subscapularis (DSR)",
      "description" : "Subscapularis (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SKS.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SKS"
      },
      "name" : "Sundhedsvæsenets klassifikationssystem (SKS)",
      "description" : "Sundhedsvæsenets klassifikationssystem (SKS) - Udvalgte koder i RKKP. Link: urn:oid:1.2.208.176.2.4",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SKSCodeCollection.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SKSCodeCollection"
      },
      "name" : "Sundhedsvæsenets klassifikationssystem (SKS) - Samlinger af koder",
      "description" : "Sundhedsvæsenets klassifikationssystem (SKS) - Udvalgte samlinger af koder i RKKP. Link: urn:oid:1.2.208.176.2.4",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SOR.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SOR"
      },
      "name" : "Sundhedsvæsenets Organisationsregister (SOR)",
      "description" : "Sundhedsvæsenets OrganisationsregisterR (SOR) - Udvalgte koder i RKKP.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SupplerendeIndgrebDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SupplerendeIndgrebDSR"
      },
      "name" : "Supplerende indgreb (DSR)",
      "description" : "Supplerende indgreb (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SurgicalAttire.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SurgicalAttire"
      },
      "name" : "Surgical attire, during operations",
      "description" : "Surgical attire, during operations",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuspensionDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuspensionDUGA"
      },
      "name" : "Suspension (DUGA)",
      "description" : "Procedurekode - Suspension (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturMaterialeIngivinalhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturMaterialeIngivinalhernieDHDB"
      },
      "name" : "Sutur materiale, ingivinalhernie (DHDB)",
      "description" : "Sutur materiale, ingivinalhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturMaterialeVentralhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturMaterialeVentralhernieDHDB"
      },
      "name" : "Sutur materiale, ventralhernie (DHDB)",
      "description" : "Sutur materiale, ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturMonofilamentTypeVentralhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturMonofilamentTypeVentralhernieDHDB"
      },
      "name" : "Sutur monofilament type, ventralhernie (DHDB)",
      "description" : "Sutur monofilament type, ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturTypeVentralhernieDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturTypeVentralhernieDHDB"
      },
      "name" : "Sutur type, ventralhernie (DHDB)",
      "description" : "Sutur type, ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturTypeDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturTypeDHDB"
      },
      "name" : "Sutur type; selvlåsende (DHDB)",
      "description" : "Suturtype; selvlåsende (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturHurtigResorberbarMonoDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturHurtigResorberbarMonoDHDB"
      },
      "name" : "Suturtype hurtig resorberbar monofilament ventralhernie (DHDB)",
      "description" : "Suturtype hurtig resorberbar monofilament ventralhernie, ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturHurtigResorberbarMultiDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturHurtigResorberbarMultiDHDB"
      },
      "name" : "Suturtype hurtig resorberbar multifilament ventralhernie (DHDB)",
      "description" : "Suturtype hurtig resorberbar multifilament, ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturLangsomResorberbarMonoDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturLangsomResorberbarMonoDHDB"
      },
      "name" : "Suturtype langsom resorberbar monofilament ventralhernie (DHDB)",
      "description" : "Suturtype langsom resorberbar monofilament, ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturNonResorberbarMonoDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturNonResorberbarMonoDHDB"
      },
      "name" : "Suturtype non-resorberbar monofilament ventralhernie (DHDB)",
      "description" : "Suturtype non-resorberbar monofilament, ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SuturNonResorberbarMultiDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SuturNonResorberbarMultiDHDB"
      },
      "name" : "Suturtype non-resorberbar multifilament ventralhernie (DHDB)",
      "description" : "Suturtype non-resorberbar multifilament, ventralhernie (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SygdomMedicinskBehandletDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SygdomMedicinskBehandletDHDB"
      },
      "name" : "Sygdom; medicinsk behandlet (DHDB)",
      "description" : "Sygdom; medicinsk behandlet (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LocationExtranodalFemale.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LocationExtranodalFemale"
      },
      "name" : "Sygdomslokalisation er kun ekstranodalt, kvinder (LYFO)",
      "description" : "Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en kvinde (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-locationExtranodalFemale-V2.html"
      }],
      "reference" : {
        "reference" : "ValueSet/locationExtranodalFemale-V2"
      },
      "name" : "Sygdomslokalisation er kun ekstranodalt, kvinder (LYFO) version 2",
      "description" : "Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en kvinde (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LocationExtranodalMale.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LocationExtranodalMale"
      },
      "name" : "Sygdomslokalisation er kun ekstranodalt, mænd (LYFO)",
      "description" : "Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en mand (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-locationExtranodalMale-V2.html"
      }],
      "reference" : {
        "reference" : "ValueSet/locationExtranodalMale-V2"
      },
      "name" : "Sygdomslokalisation er kun ekstranodalt, mænd (LYFO) version 2",
      "description" : "Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en mand (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LocationNodal.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LocationNodal"
      },
      "name" : "Sygdomslokalisation er kun nodalt (LYFO)",
      "description" : "Sygdomslokalisation i lymfe områder er kun nodalt (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-locationNodal-V2.html"
      }],
      "reference" : {
        "reference" : "ValueSet/locationNodal-V2"
      },
      "name" : "Sygdomslokalisation er kun nodalt (LYFO) version 2",
      "description" : "Sygdomslokalisation i lymfe områder er kun nodalt (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LocationPriSecNodalFemale.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LocationPriSecNodalFemale"
      },
      "name" : "Sygdomslokalisation er prim. nodalt, sek. ekstranodalt eller omv, kvinder (LYFO)",
      "description" : "Sygdomslokalisation i lymfe områder er primært nodalt, sekundært ekstranodalt eller primært ekstranodalt, sekundært nodalt, og patienten er en kvinde (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LocationPriSecNodalMale.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LocationPriSecNodalMale"
      },
      "name" : "Sygdomslokalisation er prim. nodalt, sek. ekstranodalt eller omv, mænd (LYFO)",
      "description" : "Sygdomslokalisation i lymfe områder er primært nodalt, sekundært ekstranodalt eller primært ekstranodalt, sekundært nodalt, og patienten er en mand (LYFO)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Sygdomsomraader.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Sygdomsomraader"
      },
      "name" : "Sygdomsområder",
      "description" : "Sygdomsområder i KIP",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SygdomsomraaderAlle.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SygdomsomraaderAlle"
      },
      "name" : "Sygdomsområder - alle",
      "description" : "Alle Sygdomsområder i KIP",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SygdomsomraaderHaema.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SygdomsomraaderHaema"
      },
      "name" : "Sygdomsområder - HÆMA",
      "description" : "Alle Sygdomsområder i KIP vedr. hæmatologi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SygdomsomraaderDOF.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SygdomsomraaderDOF"
      },
      "name" : "Sygdomsområder - Ortopædkirurgi",
      "description" : "Alle Sygdomsområder i KIP vedr. ortopædkirurgi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-LokationLymphomas.html"
      }],
      "reference" : {
        "reference" : "ValueSet/LokationLymphomas"
      },
      "name" : "Sygdomsudbredelse i lymfe områder",
      "description" : "Sygdomsudbredelse i lymfe områder",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Skala.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Skala"
      },
      "name" : "Symptom skala",
      "description" : "Symptom skala",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-SymptomerMikrovaskulaer.html"
      }],
      "reference" : {
        "reference" : "ValueSet/SymptomerMikrovaskulaer"
      },
      "name" : "Symptomer Mikrovaskulære",
      "description" : "Typer af mikrovaskulære symptomeromplikationer - DMPN",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Symptoms.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Symptoms"
      },
      "name" : "Symptoms",
      "description" : "Symptoms",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-SystemiskPraeparat.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/SystemiskPraeparat"
      },
      "name" : "Systemiske præperater",
      "description" : "Dette er systemiske præperater",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TackernavnAbsorberbarDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TackernavnAbsorberbarDHDB"
      },
      "name" : "Tackernavn; Absorberbare tackers (DHDB)",
      "description" : "Tackernavn; Absorberbare tackers (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TackernavnNonAbsorberbarDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TackernavnNonAbsorberbarDHDB"
      },
      "name" : "Tackernavn; Non-absorberbare tackers (DHDB)",
      "description" : "Tackernavn; Non-absorberbare tackers (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TackertypeDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TackertypeDHDB"
      },
      "name" : "Tackertype; absorberbar/non-absorberbar (DHDB)",
      "description" : "Tackertype; absorberbar/non-absorberbar (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HandProblemer.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HandProblemer"
      },
      "name" : "Taget hånd om problemer",
      "description" : "Taget hånd om problemer, PRO-PAL-skema 1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-HaandProblemer.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/HaandProblemer"
      },
      "name" : "Taget hånd om problemer",
      "description" : "Taget hånd om problemer, PRO-PAL-skema 1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-RadiationTherapyTarget.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/RadiationTherapyTarget"
      },
      "name" : "Target of the radiation therapy",
      "description" : "Target of the radiation therapy",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-StopTeam.html"
      }],
      "reference" : {
        "reference" : "ValueSet/StopTeam"
      },
      "name" : "Teammedlemmer på stopholdet",
      "description" : "Teammedlemmer/personale på stopholdet",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-StopTeam.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/StopTeam"
      },
      "name" : "Teammedlemmer på stopholdet",
      "description" : "Teammedlemmer/personale på stopholdet",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS10Dysarthria.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS10Dysarthria"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS11ExtinctionInattention.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS11ExtinctionInattention"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect)",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect); Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS1aLOC.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS1aLOC"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 1a. Level of Consciousness",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1a. Level of Consciousness; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS1bLOC.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS1bLOC"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS1cLOC.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS1cLOC"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 1c. Level of Consciousness: Commands",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1c. Level of Consciousness: Commands; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS2Gaze.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS2Gaze"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS3Visual.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS3Visual"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 3. Visual",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 3. Visual; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS4FacialPalsy.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS4FacialPalsy"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS5MotorArm.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS5MotorArm"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS6MotorLeg.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS6MotorLeg"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS7LimbAtaxia.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS7LimbAtaxia"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS8Sensory.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS8Sensory"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-NIHSS9Language.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/NIHSS9Language"
      },
      "name" : "The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language",
      "description" : "The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TidligereIndgrebDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TidligereIndgrebDSR"
      },
      "name" : "Tidligere indgreb (DSR)",
      "description" : "Tidligere indgreb (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TidligereOperationDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TidligereOperationDKR"
      },
      "name" : "Tidligere operation (DKR)",
      "description" : "Tidligere operation (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TidligereOperationHofte.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TidligereOperationHofte"
      },
      "name" : "Tidligere operation hofte (hoftealloplastik)",
      "description" : "Tidligere operation hofte (hoftealloplastik)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CentralBlock.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CentralBlock"
      },
      "name" : "Tidspunkt for central blokade",
      "description" : "Tidspunkt for central blokade",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TilsynAfdeling.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TilsynAfdeling"
      },
      "name" : "TilsynAfdeling - DPD",
      "description" : "TilsynAfdeling - DPD",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TilsynAfdeling.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TilsynAfdeling"
      },
      "name" : "TilsynAfdeling - DPD",
      "description" : "TilsynAfdeling - DPD",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-HydrocephalusTiltag.html"
      }],
      "reference" : {
        "reference" : "ValueSet/HydrocephalusTiltag"
      },
      "name" : "Tiltag i forbindelse med hydrocephalus",
      "description" : "Tiltag i forbindelse med hydrocephalus",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VasospasmerTiltag.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VasospasmerTiltag"
      },
      "name" : "Tiltag i forbindelse med vasospasmer",
      "description" : "Tiltag i forbindelse med vasospasmer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ActilyseIkkeGivet.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ActilyseIkkeGivet"
      },
      "name" : "Totaldosis i.v. actilyse er ikke givet; årsag",
      "description" : "Årsagen til hvorfor Totaldosis i.v. actilyse ikke er givet",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Transplantation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Transplantation"
      },
      "name" : "Transplantation",
      "description" : "Er en Transplantation udført",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TransplantationCageAugmentDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TransplantationCageAugmentDHR"
      },
      "name" : "Transplantation - Transplant/Cage/Augment (DHR)",
      "description" : "Transplantation - Transplantation/Cage/Augment (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TransplantationTypeDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TransplantationTypeDHR"
      },
      "name" : "Transplantation type (DHR)",
      "description" : "Transplantation type (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Transplantation1.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Transplantation1"
      },
      "name" : "Transplantation uden svarmuligheden Ingen transplantation",
      "description" : "Er en Transplantation udført",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TransplantationcenterALG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TransplantationcenterALG"
      },
      "name" : "Transplantationcenterliste til ALG",
      "description" : "Transplantationcenterliste til ALG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TransplantationstypeCML.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TransplantationstypeCML"
      },
      "name" : "Transplantationstype (CML)",
      "description" : "Transplantationstype (CML)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentCause.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentCause"
      },
      "name" : "Treatment cause - unplanned",
      "description" : "Treatment cause - unplanned",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentIndication.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentIndication"
      },
      "name" : "Treatment indication",
      "description" : "Treatment indication",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentInitiatives.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentInitiatives"
      },
      "name" : "Treatment initiatives",
      "description" : "Treatment initiatives",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentLesion.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentLesion"
      },
      "name" : "Treatment lesion",
      "description" : "Treatment lesion",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentMethodMRD.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentMethodMRD"
      },
      "name" : "Treatment method - Minimal Residual Disease (MRD)",
      "description" : "Treatment method - Minimal Residual Disease (MRD)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentNotGiven.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentNotGiven"
      },
      "name" : "Treatment not given; cause",
      "description" : "Treatment not given; cause",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentPsychopharmacological.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentPsychopharmacological"
      },
      "name" : "Treatment psychopharmacological",
      "description" : "Treatment psychopharmacological",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentRegimen.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentRegimen"
      },
      "name" : "Treatment regimen",
      "description" : "Treatment regimen",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentResponseEvaluation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentResponseEvaluation"
      },
      "name" : "Treatment response evaluation",
      "description" : "Treatment response evaluation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentSchedule.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentSchedule"
      },
      "name" : "Treatment schedule",
      "description" : "Treatment schedule",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentSufficient.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentSufficient"
      },
      "name" : "Treatment sufficient",
      "description" : "Treatment sufficient",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentType"
      },
      "name" : "Treatment type",
      "description" : "Treatment type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentUnspecified.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentUnspecified"
      },
      "name" : "Treatment unspecified",
      "description" : "Treatment unspecified",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TreatmentIntention.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TreatmentIntention"
      },
      "name" : "TreatmentIntention",
      "description" : "Behandlingsintention for kræft databaserne",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentIndicationCLL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentIndicationCLL"
      },
      "name" : "Treatment_Indication_CLL",
      "description" : "Indikation for kemoterapi/behandling - CLL",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentResponseEvaluationCLL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentResponseEvaluationCLL"
      },
      "name" : "Treatment_Response_Evaluation_CLL",
      "description" : "Indikation for kemoterapi/behandling - CLL",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentResponseEvaluationLYFO.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentResponseEvaluationLYFO"
      },
      "name" : "Treatment_Response_Evaluation_LYFO",
      "description" : "Indikation for kemoterapi/behandling - LYFO",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TrombektomiPerfusion.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TrombektomiPerfusion"
      },
      "name" : "Trombektomi-Perfusion (Danstroke)",
      "description" : "Perfusion opnået under trombektomi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-TrombektomiPerfusion.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/TrombektomiPerfusion"
      },
      "name" : "Trombektomi-Perfusion (Danstroke)",
      "description" : "Perfusion opnået under trombektomi",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TrombolyseprofylakseDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TrombolyseprofylakseDHR"
      },
      "name" : "Trombolyseprofylakse (DHR)",
      "description" : "Trombolyseprofylakse (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Trombolysepraeparater.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Trombolysepraeparater"
      },
      "name" : "Trombolysepræparater",
      "description" : "Danstroke Trombolysepræparater",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TumorklassifikationBehandlingDEGC.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TumorklassifikationBehandlingDEGC"
      },
      "name" : "Tumorklassifikation",
      "description" : "Histologisk tumorklassifikation i DEGC (behandling)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TumorklassifikationDiagnoseDEGC.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TumorklassifikationDiagnoseDEGC"
      },
      "name" : "Tumorklassifikation",
      "description" : "Histologisk tumorklassifikation i DEGC (diagnose)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TumorklassifikationDEGC.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TumorklassifikationDEGC"
      },
      "name" : "Tumorklassifikation [DEGC]",
      "description" : "Histologisk tumorklassifikation i [DEGC]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-IndgrebPrioritetAkutElektiv.html"
      }],
      "reference" : {
        "reference" : "ValueSet/IndgrebPrioritetAkutElektiv"
      },
      "name" : "Type af indgreb (akut/elektiv)",
      "description" : "Type af indgreb (akut/elektiv)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TypeLokalresektionKolonDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TypeLokalresektionKolonDCCG"
      },
      "name" : "Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG",
      "description" : "Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TypeLokalresektionRektumDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TypeLokalresektionRektumDCCG"
      },
      "name" : "Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG",
      "description" : "Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TypeLokalresektionDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TypeLokalresektionDCCG"
      },
      "name" : "Type af præoperativ endoskopisk lokalresektion DCCG",
      "description" : "Type af præoperativ endoskopisk lokalresektion DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-PTNMType.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/PTNMType"
      },
      "name" : "Type af pTNM",
      "description" : "Type af pTNM",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NerveBlockTypeUpper.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NerveBlockTypeUpper"
      },
      "name" : "Typer af blokade overekstremiteter",
      "description" : "Typer af perifer nerveblokade - overekstremiteter",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NerveBlockTypeLower.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NerveBlockTypeLower"
      },
      "name" : "Typer af blokade underekstremiteter",
      "description" : "Typer af perifer nerveblokade - underekstremiteter",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-NerveBlockTypeOther.html"
      }],
      "reference" : {
        "reference" : "ValueSet/NerveBlockTypeOther"
      },
      "name" : "Typer af blokade øvrige",
      "description" : "Type Perifer nerveblokade Trunkal/Abdominal/Øvrige",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-BlockTypes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/BlockTypes"
      },
      "name" : "Typer af blokader",
      "description" : "Blokader - Central, Underekstremitet, Overekstremitet",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-CentralBlockType.html"
      }],
      "reference" : {
        "reference" : "ValueSet/CentralBlockType"
      },
      "name" : "Typer af central blokade",
      "description" : "Typer af central blokade",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UMComponentTypeDAMYDA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UMComponentTypeDAMYDA"
      },
      "name" : "U-M komponent type",
      "description" : "U-M komponent type [DAMYDA]",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ReferredForTraining.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ReferredForTraining"
      },
      "name" : "Uddybning af hvor patienten er henvist til fysisk træning",
      "description" : "Uddybning af hvor patienten er henvist til fysisk træning",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ResektionUdfoerelseDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ResektionUdfoerelseDCCG"
      },
      "name" : "Udførelse af resektion DCCG",
      "description" : "Udførelse af resektion DCCG",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UdfoerendeLAB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UdfoerendeLAB"
      },
      "name" : "UdførendendeLAB",
      "description" : "UdførendeLAB",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureUdfoertDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureUdfoertDCCG"
      },
      "name" : "Udført procedure (DCCG)",
      "description" : "Udført procedure (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureUdfoertK1DCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureUdfoertK1DCCG"
      },
      "name" : "Udført procedure K1 (DCCG)",
      "description" : "Udført procedure K1 (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureUdfoertK2DCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureUdfoertK2DCCG"
      },
      "name" : "Udført procedure K2 (DCCG)",
      "description" : "Udført procedure K2 (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureUdfoertK3DCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureUdfoertK3DCCG"
      },
      "name" : "Udført procedure K3 (DCCG)",
      "description" : "Udført procedure K3 (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureUdfoertR1DCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureUdfoertR1DCCG"
      },
      "name" : "Udført procedure R1 (DCCG)",
      "description" : "Udført procedure R1 (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureUdfoertR2DCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureUdfoertR2DCCG"
      },
      "name" : "Udført procedure R2 (DCCG)",
      "description" : "Udført procedure R2 (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureUdfoertR3DCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureUdfoertR3DCCG"
      },
      "name" : "Udført procedure R3 (DCCG)",
      "description" : "Udført procedure R3 (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ProcedureUdfoertR4DCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ProcedureUdfoertR4DCCG"
      },
      "name" : "Udført procedure R4 (DCCG)",
      "description" : "Udført procedure R4 (DCCG)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UdredningDANDEM.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UdredningDANDEM"
      },
      "name" : "Udredning (DANDEM)",
      "description" : "Udredning (DANDEM)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UdredningDANDEM2025.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UdredningDANDEM2025"
      },
      "name" : "Udredning (DANDEM) 2025",
      "description" : "Udredning (DANDEM) - Fjernet to udfald og omformuleret no_wish_for_assessment. Erstatter et tidligere VS.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UdredningKliniskGenetisk.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UdredningKliniskGenetisk"
      },
      "name" : "Udredning - Klinisk/genetisk",
      "description" : "Udredning - Klinisk/genetisk",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UdskrevetTil.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UdskrevetTil"
      },
      "name" : "Udskrevet til",
      "description" : "Udskrevet til",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-UdskrevetTil.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/UdskrevetTil"
      },
      "name" : "Udskrevet til",
      "description" : "Udskrevet til",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UndersoegelsesTypeDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UndersoegelsesTypeDUGA"
      },
      "name" : "Undersøgelsestype (DUGA)",
      "description" : "Undersøgelsestype (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-UndersoegelsesTypeDUGA.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/UndersoegelsesTypeDUGA"
      },
      "name" : "Undersøgelsestype (DUGA)",
      "description" : "Undersøgelsestype (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UndersoendeLAB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UndersoendeLAB"
      },
      "name" : "UndersøgendeLAB",
      "description" : "UndersøgendeLAB",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Undervisning.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Undervisning"
      },
      "name" : "Undervisningstype",
      "description" : "Undervisningstype",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Uoplyst.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Uoplyst"
      },
      "name" : "Uoplyst (enkelt udfald)",
      "description" : "Giver mulighed for at svare ukendt/ukendt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-UrniLaekDUGA.html"
      }],
      "reference" : {
        "reference" : "ValueSet/UrniLaekDUGA"
      },
      "name" : "Urin lækker (DUGA)",
      "description" : "Hvornår lækker urin (DUGA)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Uspecificeret.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Uspecificeret"
      },
      "name" : "Uspecificeret (enkelt udfald)",
      "description" : "Uspecificeret (enkelt udfald)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "SearchParameter"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "SearchParameter-ValueSetLatest.html"
      }],
      "reference" : {
        "reference" : "SearchParameter/ValueSetLatest"
      },
      "name" : "ValueSetLatest",
      "description" : "Search ValueSet for 'latest' extension",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-VancouverClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/VancouverClassification"
      },
      "name" : "Vancouver classification of periprosthetic hip fractures",
      "description" : "Vancouver classification of periprosthetic hip fractures; Link: https://radiopaedia.org/articles/vancouver-classification-of-periprosthetic-hip-fractures",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VancouverKlassifikationDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VancouverKlassifikationDHR"
      },
      "name" : "Vancouver klassifikation (DHR)",
      "description" : "Vancouver klassifikation (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VancouverKlassifikationPeroperativDHR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VancouverKlassifikationPeroperativDHR"
      },
      "name" : "Vancouver klassifikation - Peroperativ (DHR)",
      "description" : "Vancouver klassifikation - Peroperativ (DHR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VarighedDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VarighedDKR"
      },
      "name" : "Varighed (DKR)",
      "description" : "Varighed (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VarighedPostOPTrombDKR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VarighedPostOPTrombDKR"
      },
      "name" : "Varighed PostOP trombolyseprofylakse (DKR)",
      "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VarighedPostOPTrombDKRVitKanta.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VarighedPostOPTrombDKRVitKanta"
      },
      "name" : "Varighed PostOP trombolyseprofylakse (DKR) VitK_anta",
      "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)VitK_anta",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VarighedPostOPTrombDKR1.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VarighedPostOPTrombDKR1"
      },
      "name" : "Varighed PostOP trombolyseprofylakse (DKR)1",
      "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VarighedPostOPTrombDKR2.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VarighedPostOPTrombDKR2"
      },
      "name" : "Varighed PostOP trombolyseprofylakse (DKR)2",
      "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)2",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VarighedPostOPTrombDKR3.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VarighedPostOPTrombDKR3"
      },
      "name" : "Varighed PostOP trombolyseprofylakse (DKR)3",
      "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)3",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VarighedPostOPTrombDKRNOAK.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VarighedPostOPTrombDKRNOAK"
      },
      "name" : "Varighed PostOP trombolyseprofylakse (DKR)NOAK",
      "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR) NOAK",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VarigRespons.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VarigRespons"
      },
      "name" : "VarigRespons",
      "description" : "VarigRespons",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ICHEvakuering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ICHEvakuering"
      },
      "name" : "Ved fund af ICH, skal der evkaueres eller ej",
      "description" : "Ved fund af intracerebralt hæmatom (ICH), skal der evkaueres eller ej",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-TreatmentPreservation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/TreatmentPreservation"
      },
      "name" : "Vedligeholdelsesbehandling",
      "description" : "Hvilken vedligeholdelsesbehandling er der påbegyndt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VentralHernieCicatriceTypeDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VentralHernieCicatriceTypeDHDB"
      },
      "name" : "Ventral hernie cicatrice type (DHDB)",
      "description" : "Ventral hernie cicatrice type (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VentralHernieTypeDHDB.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VentralHernieTypeDHDB"
      },
      "name" : "Ventral hernie type (DHDB)",
      "description" : "Ventral hernie type (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-VentralHernieTypeDHDB2026.html"
      }],
      "reference" : {
        "reference" : "ValueSet/VentralHernieTypeDHDB2026"
      },
      "name" : "Ventral hernie type (DHDB) 2026",
      "description" : "Ventral hernie type (DHDB)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Verdict.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Verdict"
      },
      "name" : "Verdict",
      "description" : "Verdict",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-VisitationCriteriaNotMet.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/VisitationCriteriaNotMet"
      },
      "name" : "Visitation criteria not met; cause",
      "description" : "Visitation criteria not met; cause",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ManglendeVisitation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ManglendeVisitation"
      },
      "name" : "Visitationskriterier uopfyldt",
      "description" : "Hvilke visitationskriterier var ikke opfyldt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-WalchClassification.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/WalchClassification"
      },
      "name" : "Walch classification",
      "description" : "Walch classification; Link: https://radiopaedia.org/articles/walch-classification-of-glenoid-morphology-1",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-WalchKlassifikationDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/WalchKlassifikationDSR"
      },
      "name" : "Walch klassifikation (DSR)",
      "description" : "Walch klassifikation (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-WFNSGradingSystem.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/WFNSGradingSystem"
      },
      "name" : "WFNS grading system",
      "description" : "World Federation of Neurosurgical Societies (WFNS) grading system; Link: https://radiopaedia.org/articles/wfns-grading-system",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-WFNSGradering.html"
      }],
      "reference" : {
        "reference" : "ValueSet/WFNSGradering"
      },
      "name" : "WFSN grad",
      "description" : "World Federation of Neurosurgical Societies (WFNS) grad.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ATC.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ATC"
      },
      "name" : "WHO ATC",
      "description" : "WHO ATC code system. Link: http://www.whocc.no/atc",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ATCMixedCodes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ATCMixedCodes"
      },
      "name" : "WHO ATC; Mixed codes",
      "description" : "WHO ATC code system; Mixed codes. Link: http://www.whocc.no/atc",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-WHOPerformanceStatus04.html"
      }],
      "reference" : {
        "reference" : "ValueSet/WHOPerformanceStatus04"
      },
      "name" : "WHO Performance status grad 1-4",
      "description" : "WHO Performance status grad 1-4",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-WOOS.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/WOOS"
      },
      "name" : "WOOS",
      "description" : "WOOS",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-WOOSArmloeftDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/WOOSArmloeftDSR"
      },
      "name" : "WOOS - Armløft (DSR)",
      "description" : "WOOS - Armløft (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-WOOSHaenderDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/WOOSHaenderDSR"
      },
      "name" : "WOOS - Hænder (DSR)",
      "description" : "WOOS - Hænder (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-WOOSTraeningDSR.html"
      }],
      "reference" : {
        "reference" : "ValueSet/WOOSTraeningDSR"
      },
      "name" : "WOOS - Træning (DSR)",
      "description" : "WOOS - Træning (DSR)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AarsagTilProcedureDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AarsagTilProcedureDCCG"
      },
      "name" : "Årsag til anden/aflastende procedure colorectal cancer",
      "description" : "Årsag til anden/aflastende procedure colorectal cancer",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-AarsagOphoerDNSL.html"
      }],
      "reference" : {
        "reference" : "ValueSet/AarsagOphoerDNSL"
      },
      "name" : "Årsag til ophør (DNSL)",
      "description" : "Årsager til interventionsforløb er ophørt",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-BehandlinsplanAendretAarsagDCCG.html"
      }],
      "reference" : {
        "reference" : "ValueSet/BehandlinsplanAendretAarsagDCCG"
      },
      "name" : "Årsag til ændret behandlingsplan DCCG",
      "description" : "Årsag til ændret behandlingsplan DCCG",
      "exampleBoolean" : false
    }],
    "page" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
        "valueUrl" : "toc.html"
      }],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "index.html"
        }],
        "nameUrl" : "index.html",
        "title" : "Home",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "downloads.html"
        }],
        "nameUrl" : "downloads.html",
        "title" : "Downloads",
        "generation" : "markdown"
      }]
    },
    "parameter" : [{
      "code" : "path-resource",
      "value" : "fsh-generated/resources"
    },
    {
      "code" : "path-pages",
      "value" : "input/includes"
    },
    {
      "code" : "path-resource",
      "value" : "input/capabilities"
    },
    {
      "code" : "path-resource",
      "value" : "input/examples"
    },
    {
      "code" : "path-resource",
      "value" : "input/extensions"
    },
    {
      "code" : "path-resource",
      "value" : "input/models"
    },
    {
      "code" : "path-resource",
      "value" : "input/operations"
    },
    {
      "code" : "path-resource",
      "value" : "input/profiles"
    },
    {
      "code" : "path-resource",
      "value" : "input/resources"
    },
    {
      "code" : "path-resource",
      "value" : "input/vocabulary"
    },
    {
      "code" : "path-resource",
      "value" : "input/testing"
    },
    {
      "code" : "path-resource",
      "value" : "input/history"
    },
    {
      "code" : "path-pages",
      "value" : "template/config"
    },
    {
      "code" : "path-pages",
      "value" : "input/images"
    },
    {
      "code" : "path-tx-cache",
      "value" : "input-cache/txcache"
    }]
  }
}

```
